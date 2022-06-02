<?php $this->load->view('common/admin/header'); ?>


<div class="cs-wrapper">
    <?php $this->load->view('common/admin/navigation'); ?>
    <?php $this->load->view($content); ?>
    <?php $this->load->view('common/admin/footer'); ?>
</div>

<style>
    .printscreen span {
        display: inline-block;
        min-width: 140px;
        font-weight: bolder;
        color: #232323;
        padding: 7px 0;
        margin-right: 10px;
    }

    .printscreen {
        display: none;
    }
</style>
<script>
    function printit() {
        var old = $('body').html();
        try {

            var printable = $('#printableonly').html();
            $('body').html(printable);
            $('.mainscreen').hide();
            $('.printscreen').show();

            window.print();


        } catch (err) {}
        // $('body').html(old);
        location.reload();
    }
</script>

<script type="text/javascript">
    $(document).ready(function() {
        var docHeight = $(window).height();
        var footerHeight = $('.footer').height();
        var footerTop = $('.footer').position().top + footerHeight;

        if (footerTop < docHeight) {
            $('.footer').css('margin-top', 10 + (docHeight - footerTop) + 'px');
        }
    });
</script>