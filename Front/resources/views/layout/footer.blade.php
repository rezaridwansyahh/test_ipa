<footer class="site-footer">
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="footer-text col-md-3">
                    <p>&copy; 2017 LIBRARIA. All rights reserved.</p>
                </div>
                <div class="col-md-9 pull-right">
                    <ul id="tombols">
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<style>
#backToTop{
    position: fixed;
	bottom: 10px;
	right: 10px;
	cursor: pointer;
	display: none;
    color: #fff;
    background: rgba(0,0,0,0.3);
    border: solid 1px rgba(0,0,0,0.6);
}
</style>
<script>
$(document).ready(function(){
    $('#tombols').append('<div id="toTop" class="btn btn-danger"><span class="glyphicon glyphicon-chevron-up"></span> Back to Top</div>');
    $(window).scroll(function () {
    if ($(this).scrollTop() != 0) {
      $('#toTop').fadeIn();
    } else {
      $('#toTop').fadeOut();
    }
  });
  $('#toTop').click(function(){
      $("html, body").animate({ scrollTop: 0 }, 600);
      return false;
  });
});

</script>
