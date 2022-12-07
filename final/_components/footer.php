  <!-- Main Content Ends -->
  <!-- <footer class="bg-white">
    <p class="">
      &copy;<?php echo date('Y'); ?> IDM 232. All
      rights reserved.
    </p>
  </footer> -->

  <div class="bottom">
    <div class="bottom-logo logo">
        <h3><span class="pink">Delish</span></h3>
        <h3><span class="orange">Dishes</span></h3>
    </div>

    <p> &copy; Gianna Maaddi <?php echo date('Y'); ?></p>
</div>

  <!-- <script src="dist/scripts/main.js"></script> -->
  <script src="<?php echo site_url(); ?>/dist/scripts/main.js"></script>
  <script>
    tinymce.init({
      selector: 'textarea',
      // plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect',
      plugins: 'anchor autolink  codesample  link lists searchreplace table visualblocks wordcount',
      // toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link table | align lineheight | numlist bullist indent outdent |   removeformat',
      // content-style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }',
      
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