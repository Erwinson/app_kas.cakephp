<!DOCTYPE html>
<html lang="en"> <!--begin::Head-->

<?=$this->element("header");?>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary"> <!--begin::App Wrapper-->
    <div class="app-wrapper"> <!--begin::Header-->
        <?=$this->element("navigation");?> <!--end::Header--> <!--begin::Sidebar-->
        <?=$this->element("sidebar");?> <!--end::Sidebar--> <!--begin::App Main-->
        <main class="app-main"> <!--begin::App Content Header-->
            <!-- 
                app-content-header
                app-content
            -->
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </main> <!--end::App Main--> <!--begin::Footer-->
        <?=$this->element("footer");?> <!--end::Footer-->
    </div> <!--end::App Wrapper--> <!--begin::Script--> <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <?=$this->element("script.js");?>
</body><!--end::Body-->

</html>