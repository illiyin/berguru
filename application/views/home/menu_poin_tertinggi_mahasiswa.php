<script type="text/javascript">

    // SCRIPT UNTUK ADD ACTIVE
    $( document ).ready(function() {
        $("#<?=$active?>").attr("class","active");
        $("#filter").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $(".panel-ask").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });


</script>
<div class="sidemenu-overlay hide animated"></div>
<!-- header -->
<header class="pages">
    <nav class="navbar navbar-default nav-front">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?=base_url()?>">
                            <img src="<?=base_url()?>assets/assets/images/logo.png" width="144" height="33" alt="" class="img-responsive">
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse animated">
                        <ul class="nav navbar-nav">
                            <li class="" id="home"><a href="<?=base_url()?>">Home</a></li>
                            <!-- <li class="active"><a href="<?=base_url()?>">Home <span class="sr-only">(current)</span></a></li> -->
                            <li class="dropdown" id="kategori">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    Kategori <span class="bgicon icon-arrow-down"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?=base_url()?>kategori-mapel/?q=semua%20mata%20pelajaran">Semua Mata Pelajaran</a></li>
                                    <?php foreach ($kategori as $key => $value) { ?>
                                        <li><a href="<?=base_url()?>kategori-mapel/?q=<?=$value->nama?>"><?=$value->nama?></a></li>
                                    <?php } ?>
                                </ul>
                            </li>
                            <li id="materi" class=""><a href="<?=base_url()?>materi-detil">Materi</a></li>
                            <li id="karir" class=""><a href="<?=base_url()?>karir">Karir</a></li>
                            <li id="tentangKami" class=""><a href="<?=base_url()?>tentang-kami">Tentang Kami</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <?php
                            if ($this->session->userdata('loginSession') == array()) { ?>
                                <li class=""><a href="<?=base_url()?>login"><span class="bgicon icon-lock"></span> Masuk</a></li>
                                <li class="nav-button"><a href="<?=base_url()?>register"><span class="bgicon icon-user-add"></span> Daftar</a></li>
                            <?php }else{ ?>
                                <li><a href="<?=base_url()?>dashboard-<?=$this->session->userdata('loginSession')['aktor']?>">Dashboard</a></li>
                                <li><a href="<?=base_url()?>logout"><span class="bgicon icon-unlock"></span> Logout</a></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
            </div>
        </div>
        <!-- /.container -->
    </nav>

    <div class="container nilai">
        <div class="row">
            <div class="col-xs-12">
                <div class="header-content header-pages">
                    <h1 class="title">Mahasiswa dengan Poin Tertinggi</h1>
                    <p class="caption">Dapatkan poin sebanyaknya dan dapatkan badge untuk akunmu!</p>

                </div>
            </div>
        </div>
    </div>

</header>