<!-- Required Js -->
<script src="{{ asset('assets/js/plugins/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/fonts/custom-font.js') }}"></script>
<script src="{{ asset('assets/js/pcoded.js') }}"></script>
<script src="{{ asset('assets/js/plugins/feather.min.js') }}"></script>

<script>
    change_box_container('false');
    layout_sidebar_change('light');
    layout_change('light');
    layout_caption_change('true');
    layout_rtl_change('false');
    preset_change("preset-5");
</script>

<script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
<!-- tagify -->
<script src="{{ asset('assets/js/plugins/choices.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/sweetalert2.all.min.js') }}"></script>
@livewireScripts()
</body>

</html>
