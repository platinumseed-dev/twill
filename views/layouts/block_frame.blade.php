<iframe class="blockFrame" srcdoc="{{ $blockMarkup }}" style="width: 66%; margin-left:auto; margin-right:auto; display:block;" onload="resizeIframe(this);" scrolling="no"></iframe>
<script>
    function resizeIframe(blockFrame) {
        blockFrame.style.height = blockFrame.contentWindow.document.documentElement.offsetHeight + 'px';
    }
</script>