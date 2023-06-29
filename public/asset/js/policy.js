(function ( $ ) {
    $.fn.multiStepForm = function(args) {
        if(args === null || typeof args !== 'object' || $.isArray(args))
          throw  " : Called with Invalid argument";
        var form = this;
        var tabs = form.find('.tab');
        var steps = form.find('.step');
        steps.each(function(i, e){
          $(e).on('click', function(ev){
          });
        });
        form.navigateTo = function (i) {/*index*/
          /*Mark the current section with the class 'current'*/
          tabs.removeClass('current').eq(i).addClass('current');
          if($("#form1").hasClass("current")){
            $('.acceptance-form-heading').text('Create acceptable use policy');
            $('.cookie-form-heading').text('Create cookie policy');
            $('.disclaimer-form-heading').text('Create disclaimer policy');
            $('.dmca-form-heading').text('Create Digital Millennium Copyright Act Policy');
            $('.privacy-form-heading').text('Create privacy policy');
            $('.refund-form-heading').text('Create refund policy');
            $('.terms-form-heading').text('Create terms and conditions');
          }
          if($("#form2").hasClass("current")){
            $('.acceptance-form-heading').text('Operating entity');
            $('.cookie-form-heading').text('Operating entity');
            $('.disclaimer-form-heading').text('Operating entity');
            $('.dmca-form-heading').text('Operating entity');
            $('.privacy-form-heading').text('Operating entity');
            $('.refund-form-heading').text('Operating entity');
            $('.terms-form-heading').text('Operating entity');
          }
          if($("#form3").hasClass("current")){
            $('.acceptance-form-heading').text('User accounts');
            $('.cookie-form-heading').text('Privacy policy');
            $('.disclaimer-form-heading').text('Content and information');
            $('.dmca-form-heading').text('Content and information');
            $('.privacy-form-heading').text('User accounts');
            $('.refund-form-heading').text('Products and services');
            $('.terms-form-heading').text('User accounts');
          }
          if($("#form4").hasClass("current")){
            $('.acceptance-form-heading').text('User contributions');
            $('.cookie-form-heading').text('Cookie types');
            $('.disclaimer-form-heading').text('Content reproduction and sharing');
            $('.dmca-form-heading').text('Copyright infringement reporting');
            $('.privacy-form-heading').text('User interaction');
            $('.refund-form-heading').text('Trial options');
            $('.terms-form-heading').text('Target audience');
          }
          if($("#form5").hasClass("current")){
            $('.acceptance-form-heading').text('Products and services');
            $('.cookie-form-heading').text('Limitations and restrictions');
            $('.disclaimer-form-heading').text('Compensation and sponsorship');
            $('.dmca-form-heading').text('Counter-notifications');
            $('.privacy-form-heading').text('User contributions');
            $('.refund-form-heading').text('Refund terms');
            $('.terms-form-heading').text('User contributions');
          }
          if($("#form6").hasClass("current")){
            $('.acceptance-form-heading').text('File uploads');
            $('.cookie-form-heading').text('Beacons and tracking');
            $('.disclaimer-form-heading').text('User contributions');
            $('.dmca-form-heading').text('Copyright infringement prevention');
            $('.privacy-form-heading').text('Target audience');
            $('.refund-form-heading').text('Additional services');
            $('.terms-form-heading').text('Products and services');
          }
          if($("#form7").hasClass("current")){
            $('.acceptance-form-heading').text('Emails and newsletters');
            $('.cookie-form-heading').text('Contact information');
            $('.disclaimer-form-heading').text('Reviews and testimonials');
            $('.dmca-form-heading').text('Contact information');
            $('.privacy-form-heading').text('Products and services');
            $('.refund-form-heading').text('Contact information');
            $('.terms-form-heading').text('Advertising and marketing');
          }
          if($("#form8").hasClass("current")){
            $('.acceptance-form-heading').text('Copyrighted materials');
            $('.cookie-form-heading').text('Changes and updates');
            $('.disclaimer-form-heading').text('Advertising and marketing');
            $('.dmca-form-heading').text('Changes and updates');
            $('.privacy-form-heading').text('Tracking technologies');
            $('.terms-form-heading').text('Additional clauses');
          }
          if($("#form9").hasClass("current")){
            $('.acceptance-form-heading').text('Policy enforcement');
            $('.disclaimer-form-heading').text('Representation and warranties');
            $('.privacy-form-heading').text('Advertising and marketing');
            $('.terms-form-heading').text('Contact information');
          }
          if($("#form10").hasClass("current")){
            $('.acceptance-form-heading').text('Contact information');
            $('.disclaimer-form-heading').text('Contact information');
            $('.privacy-form-heading').text('Collection of information');
            $('.terms-form-heading').text('Changes and updates');
          }
          if($("#form11").hasClass("current")){
            $('.acceptance-form-heading').text('Changes and updates');
            $('.disclaimer-form-heading').text('Changes and updates');
            $('.privacy-form-heading').text('Use of information');
          }
          if($("#form12").hasClass("current")){
            $('.privacy-form-heading').text('Information security');
          }
          if($("#form13").hasClass("current")){
            $('.privacy-form-heading').text('Contact information');
          }
          if($("#form14").hasClass("current")){
            $('.privacy-form-heading').text('Changes and updates');
          }
          // Show only the navigation buttons that make sense for the current section:
          form.find('.previous').toggle(i > 0);
          atTheEnd = i >= tabs.length - 1;
          form.find('.next').toggle(!atTheEnd);
          // console.log('atTheEnd='+atTheEnd);
          form.find('.submit').toggle(atTheEnd);
          fixStepIndicator(curIndex());
          return form;
        }
        function curIndex() {
          /*Return the current index by looking at which section has the class 'current'*/
          return tabs.index(tabs.filter('.current'));
        }
        function fixStepIndicator(n) {
          steps.each(function(i, e){
            i == n ? $(e).addClass('active') : $(e).removeClass('active');
          });
        }
        /* Previous button is easy, just go back */
        form.find('.previous').click(function() {
          form.navigateTo(curIndex() - 1);
        });

        /* Next button goes forward iff current block validates */
        form.find('.next').click(function() {
          if('validations' in args && typeof args.validations === 'object' && !$.isArray(args.validations)){
            if(!('noValidate' in args) || (typeof args.noValidate === 'boolean' && !args.noValidate)){
              form.validate(args.validations);
              if(form.valid() == true){
                form.navigateTo(curIndex() + 1);
                return true;
              }
              return false;
            }
          }
          form.navigateTo(curIndex() + 1);
        });
        form.find('.submit').on('click', function(e){
          if(typeof args.beforeSubmit !== 'undefined' && typeof args.beforeSubmit !== 'function')
            args.beforeSubmit(form, this);
          /*check if args.submit is set false if not then form.submit is not gonna run, if not set then will run by default*/        
          if(typeof args.submit === 'undefined' || (typeof args.submit === 'boolean' && args.submit)){
            form.submit();
          }
          return form;
        });
        /*By default navigate to the tab 0, if it is being set using defaultStep property*/
        typeof args.defaultStep === 'number' ? form.navigateTo(args.defaultStep) : null;

        form.noValidate = function() {
          
        }
        return form;
    };
  }( jQuery ));


  $(document).ready(function(){
    var val = {
        // Specify validation rules
        rules: {
          c_id: "required",
          s_id: "required",
          platforms: "required",
          platforms_other: "required",
          mobile_name: "required",
          website_url: "required",
          ebook_name: "required",
          landing_url: "required",
          course_name: "required",
          podcast_name: "required",
          video_name: "required",
          premium: "required",
          company: "required",
          company_name: "required",
          users: "required",
          fair_use: "required",
          formatting: "required",
          instructions: "required",
          privacy_policy: "required",
          privacy_policy_url: {
              required: true,
              pattern: '(http|https)?://.*'
            },
          essential: "required",
          functionality: "required",
          third_party: "required",
          ads: "required",
          cookies_ads_personal_info: "required",
          cookies_social: "required",
          cookies_analytical: "required",
          cookies_disable: "required",
          beacons: "required",
          register: "required",
          register_social: "required",
          info_access: "required",
          info_delete: "required",
          info_delete_method: "required",
          interact: "required",
          info_visible: "required",
          writer: "required",
          original: "required",
          copy: "required",
          share: "required",
          accept: "required",
          identify: "required",
          influence: "required",
          anon_use: "required",
          publish: "required",
          monitor: "required",
          reuse: "required",
          terminate: "required",
          testimonials: "required",
          modify: "required",
          compensate: "required",
          affiliate_links: "required",
          affiliate_links_amazon: "required",
          advise: "required",
          accuracy: "required",
          modifications: "required",
          objectionable: "required",
          remove: "required",
          age: "required",
          adult: "required",
          adult_content_warn: "required",
          sell: "required",
          payments_store: "required",
          diff_name: "required",
          upload: "required",
          execute: "required",
          install: "required",
          send: "required",
          bulk: "required",
          purchased: "required",
          suspend: "required",
          monitor_a: "required",
          marketing: "required",
          terminate_a: "required",
          action: "required",
          court: "required",
          share_user: "required",
          share_others: "required",
          liability: "required",
          counterr: "required",
          formattingg: "required",
          instructionss: "required",
          liabilityy: "required",
          notifyy: "required",
          suspendd: "required",
          backup: "required",
          backup_fee: "required",
          backup_guarantee: "required",
          actions: "required",
          contacts: "required",
          contact_form: "required",
          contact_email: {
              required: true,
              email: true
          },
          contact_address: "required",
          notify: "required",
          remote: "required",
          remote_share: "required",
          trials: "required",
          trials_days: "required",
          trials_functional: "required",
          days: "required",
          money_back: "required",
          refuse: "required",
          prorate: "required",
          offer: "required",
          fee: "required",
          recurring: "required",
          auto_renewal: "required",
          uptime_guarantee: "required",
          downtime_compensation: "required",
          payments_security: "required",
          cookiess: "required",
          cookies_none: "required",
          dnt: "required",
          newsletters: "required",
          california: "required",
          europe: "required",
          teens: "required",
          children: "required",
          children_info: "required",
          children_info_misc: "required",
          remarketing: "required",
          newsletters_remote: "required",
          newsletters_unsubscr: "required",
          geo: "required",
          features: "required",
          derivative: "required",
          sell_a: "required",
          merger: "required",
          law: "required",
          email: {
              required: true,
              email: true
          },
        },
        // Specify validation error messages
        messages: {
          c_id:    "Country is required",
          s_id:    "State is required",
          email: {
            required:   "Email is required",
            email:    "Please enter a valid e-mail",
          },

          mobile_name:    "Mobile Name is required",
          website_url:    "Website URL is required",
          contact_form: "Contact form is required",
          contact_email: {
            required:   "Contact Email is required",
            email:    "Please enter a valid e-mail",
          },
          contact_address: "Contact Address is required",
        }
    }
    $("#multistep_form").multiStepForm(
    {
      // defaultStep:0,
      beforeSubmit : function(form, submit){
        console.log("called before submiting the form");
        console.log(form);
        console.log(submit);
      },
      validations:val,
    }
    ).navigateTo(0);
  });