<div class="main-content">
    <!-- Section: home -->
    <section id="home" class="bg-lightest fullscreen">
      <div class="display-table text-center">
        <div class="display-table-cell">
          <div class="container pt-0 pb-0">
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <h1 class="font-weight-100 font-64 mb-20">Under construction</h1>
                <div class="row">
                  <div class="col-md-6 col-md-push-3">
                    <form id="mailchimp-subscription-form" class="newsletter-form mt-0 mb-30 maxwidth500">
              				<label for="mce-EMAIL"></label>
                      <div class="input-group">
                        <input type="email" id="mce-EMAIL" data-height="45px" class="form-control input-lg" placeholder="Your Email" name="EMAIL" value="">
                        <span class="input-group-btn">
                          <button type="submit" class="btn btn-colored btn-theme-colored btn-xs m-0" data-height="45px">Subscribe</button>
                        </span>
                      </div>
                    </form>

                    <!-- Mailchimp Subscription Form Validation-->
                    <script type="text/javascript">
                      $('#mailchimp-subscription-form').ajaxChimp({
                          callback: mailChimpCallBack,
                          url: '//thememascot.us9.list-manage.com/subscribe/post?u=a01f440178e35febc8cf4e51f&amp;id=49d6d30e1e'
                      });

                      function mailChimpCallBack(resp) {
                          // Hide any previous response text
                          var $mailchimpform = $('#mailchimp-subscription-form'),
                              $response = '';
                          $mailchimpform.children(".alert").remove();
                          if (resp.result === 'success') {
                              $response = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                          } else if (resp.result === 'error') {
                              $response = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                          }
                          $mailchimpform.prepend($response);
                      }
                    </script>

                  </div>
                </div>
                <p class="font-14">Sorry.... We are improving and fixing problems of our website.<br>We will be back very soon....</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
