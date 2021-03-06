<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>ADMINISTRATOR</h3>
        <ul class="nav side-menu">
            <li><a href="<?= base_url('admin/index'); ?>"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="<?= base_url('admin/chat_index'); ?>"><i class="fa fa-home"></i> Chat</a></li>
            <li><a><i class="fa fa-users"></i> Master Data <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="<?= base_url('admin/mst_jabatan'); ?>"> Master Divisi & Jabatan</a></li>
                    <li><a href="<?= base_url('admin/mst_pegawai'); ?>"> Master Pegawai</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-envelope"></i> Master Surat <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="<?= base_url('admin/mst_surat'); ?>"> Master Surat</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-files-o"></i> View Data <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <!--  <li><a href="<?= base_url('admin/list_surat'); ?>"> List Surat</a></li>-->
                    <li><a href="<?= base_url('admin/list_berkas'); ?>"> List Berkas</a></li>
                </ul>
            </li>

        </ul>
    </div>
    <div class="menu_section">
        <h3>Report</h3>
        <ul class="nav side-menu">
            <li><a><i class="fa fa-files-o"></i> Report <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="<?= base_url('report/surat_keluar'); ?>" class=""><i class="fa fa-sign-out"></i> Surat Keluar</a></li>
                    <li><a href="<?= base_url('report/surat_masuk'); ?>"><i class="fa fa-sign-out"></i> Surat Masuk</a></li>
                    <li><a href="<?= base_url('report/grafik_line_surat_keluar'); ?>"><i class="fa fa-sign-out"></i> Grafik Line Surat keluar</a></li>
                    <li><a href="<?= base_url('report/grafik_line_surat_masuk'); ?>"><i class="fa fa-sign-out"></i> Grafik Line Surat Masuk</a></li>
                </ul>
            </li>
    </div>

    <div class="menu_section">
        <h3>END</h3>
        <ul class="nav side-menu">
            <li><a href="<?= base_url('auth/logout'); ?>" class="tombol-logout"><i class="fa fa-sign-out"></i> Logout</a></li>
        </ul>
    </div>

</div>

<!-- /sidebar menu -->

<!-- /menu footer buttons -->
</div>
</div>