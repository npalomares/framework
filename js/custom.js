<script>
$('.navigation')
  .on('li a', function(e) {
    $(e.target).prev('..navbar').addClass('active');
  })
  .on('li a', function(e) {
    $(e.target).prev('..navbar').removeClass('active');
  });
</script>
