<h2>Your Album</h2>
<div id="album-slider"></div>
<div id="pagination-album"></div>

<script src="/public/javascript/album-list.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        displayAlbums(<?php echo $_SESSION["user_id"]; ?>);
    });
</script>