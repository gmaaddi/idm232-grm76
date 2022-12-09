<div class="bottom">
  <div class="bottom-logo logo">
      <h3><span class="pink">Delish</span></h3>
      <h3><span class="orange">Dishes</span></h3>
  </div>

  <p> &copy; Gianna Maaddi <?php echo date('Y'); ?></p>
</div>

<script src="<?php echo site_url(); ?>/dist/scripts/main.js"></script>
<script>
  tinymce.init({
    selector: 'textarea',
    plugins: 'anchor autolink  codesample  link lists searchreplace table visualblocks wordcount',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link table | align lineheight | numlist bullist indent outdent |   removeformat',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
    mergetags_list: [
      { value: 'First.Name', title: 'First Name' },
      { value: 'Email', title: 'Email' },
    ]
  });
</script>
</body>

</html>