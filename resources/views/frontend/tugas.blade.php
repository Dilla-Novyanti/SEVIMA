@extends("frontend.master")

@section("style")
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.min.css" integrity="sha512-3g+prZHHfmnvE1HBLwUnVuunaPOob7dpksI7/v6UnF/rnKGwHf/GdEq9K7iEN7qTtW+S0iivTcGpeTBqqB04wA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    /* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons that are used to open the tab content */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}

.box-item{
    width:900px;
    height:auto;
    margin-bottom:20px;
    border: solid 0.1px ;
    border-radius:15px;
}

.box-upload{
    width:1000px;
    height:180px;
    border: solid 0.1px;
    border-radius: 15px;
    margin-bottom:20px;
}
</style>
@endsection

@section("content")
<div class="box">
    <div class="row">
        <div class="col-6 text-white" style="margin-top:100px;padding-left:45px;">{{$pljrn->nama_pelajaran}}</div>
        <div class="col-6 text-right text-white" style="margin-top:0px;padding-right:45px;">Materi</div>
    </div>
     <!-- Tab links -->
     <div class="row justify-content-center mt-5 mb-3">
        <div class="tab bg-transparent" style="border:none;">
        <button class="tablinks" onclick="openTab(event, 'Individu')">Individu</button>
        <button class="tablinks" onclick="openTab(event, 'Kelompok')">Kelompok</button>
        <button class="tablinks" onclick="openTab(event, 'Folder')">Folder saya</button>
        </div>
    </div>

    <!-- Tab content Individu-->
    <div id="Individu" class="tabcontent" style="display:block;border:none">
    @foreach($tugas as $tgs)
            <div class="box-item">
                <div class="row">
                    <div class="col-1 mt-2"> <img src="{{url('/img/icon-tugas.png')}}" style="width:80px;"> </div>
                    <div class="col-4" style="padding-left:10px;">
                        <p>Tugas      : {{$tgs->judul_tugas}}<br/>
                            Sub materi  : <?php echo str_replace("_", " ", $tgs->kode_materi) ?><br/>
                            Pertemuan ke: {{$tgs->pertemuan}}<br/>
                        </p>
                    </div>
                    <div class="col-4" style="padding-left:10px;">
                        <p>
                            Diupload   : {{$tgs->created_at}}<br/>
                            Deadline   : {{$tgs->deadline}}<br/>
                        </p>
                    </div>
                    <div class="col-2 collapsed mt-4 ml-5 " style="font-size:12px;opacity:80px;text-color:blue;" data-toggle="collapse" data-target="#detailTugas{{$tgs->id}}"aria-expanded="true" aria-controls="detailTugas{{$tgs->id}}">
                        Show detail
                    </div>
                </div>
                <div id="detailTugas{{$tgs->id}}" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <hr/>
                <div class="row ml-4 mb-2">
                    <p>{{$tgs->deskripsi}}</p>

                    @if(isset($tgs->file_path))
                        <a href="{{$tgs->file_path}}" target="_blank">
                            <div class="row" width="auto">
                                <div class="col-1 text-right ml-4 mb-2"> 
                                    <img src="{{url('/img/icon-pdf.png')}}" style="width:30px;height:auto;"></div>
                                <div class="col-2"> <?php echo str_replace("/tugas/", "", $tgs->file_path) ?></div>
                            </div>
                        </a>
                    @endif

                </div>
                <div class="row ml-4"><b><p>Jawabanmu :</p></b></div>
                @if($tgs->type == "textarea")
                    <div class="row ml-5 mb-3">
                        <form method="POST" action="{{route('jawaban.store')}}">
                            @csrf
                            <textarea name="jawaban" id="jawaban" cols="100" rows="5"></textarea>

                            <input type="hidden" name="kode_tugas" value="{{$tgs->kode_tugas}}">
                            <button class="btn btn-success" type="submit">Kirim</button>
                        </form>
                    </div>
                @else
                     <div class="row mx-5">
                    <form method="POST" action="{{route('dropzone.store')}}" enctype="multipart/form-data" class="box-upload dropzone dz-clickable text-center" id="image-upload">
                        @csrf
                            <img src="{{url('/img/icon-cloud.png')}}" style="width:50px;height:auto;justify-content:center">
                        <div class="dz-default dz-message"><span>Dropzone files here</span></div>
                    </form>
                </div>
                
                @endif

               
                
                </div>
            </div>
            @endforeach
    </div>
    <!-- Tab Content Kelompok -->
    <div id="Kelompok" class="tabcontent">
    <h3>Kelompok</h3>
    <p>Kelompok is the capital of France.</p>
    </div>
    <!-- Tab content Folder -->
    <div id="Folder" class="tabcontent">
    <h3>Folder</h3>
    <p>Kelompok is the capital of France.</p>
    </div>
</div>
@endsection

@section("script")
<script type="text/javascript">
    function openTab(evt, tabsName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(tabsName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
<!-- dropzone -->
<script type="text/javascript">
            $(function() {
                Dropzone.options.dropzoneForm= {
                paramName: "file",
                maxFilesize: 2,
                acceptedFiles: ".jpeg,.jpg,.png,.gif, .pdf, .word, .zip",
                }
            });
        </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.js" integrity="sha512-9WciDs0XP20sojTJ9E7mChDXy6pcO0qHpwbEJID1YVavz2H6QBz5eLoDD8lseZOb2yGT8xDNIV7HIe1ZbuiDWg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection