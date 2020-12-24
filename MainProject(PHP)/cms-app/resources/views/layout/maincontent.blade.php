<section id="main-content">
	<section class="wrapper">
		{{-- <!-- //market-->
		          @include('layout.maincontent.market')	
		<!-- //market-->
		
                    <!--agileinfo-grap-->
                              @include('layout.maincontent.agileinfo')
                    <!--//agileinfo-grap-->

		          <div class="agil-info-calendar">
                              
		<!-- calendar -->
		          @include('layout.maincontent.calender')
		<!-- //calendar -->
		          @include('layout.maincontent.notification')
		<!-- tasks -->
                              @include('layout.maincontent.tasks')
		<!-- //tasks -->
                              @include('layout.maincontent.browserstats') --}}
                    @yield('content')
          
          </section>
          <!-- footer -->
          @include('layout.footer')

          <!-- / footer -->

</section>


