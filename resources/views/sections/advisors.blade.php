<div class="section section-advisors py-6 pt-md-9 pb-md-6 bg-light">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="mb-2 text-dark">Our expert advisors</h2>
      <p>The following industry leaders support the Genics team as our advisory board.</p>
    </div>
    <div class="row">
      <div class="col-lg-4 mb-5 d-flex">
        @include('components.card-team', [
          'data' => (object)([
            'team_photo' => asset('dist/media/people/nigel.jpg'),
            'team_title' => 'Nigel Preston',
            'team_content' => "Dr Nigel Preston is a global authority on aquaculture with extensive research experience in the industry, with international governments and policy makers. He has previously served as Director General of World Fish and has also held various director roles of aquaculture and food futures programs at CSIRO."
          ])
        ])
      </div>
      {{-- <div class="col-lg-8 mb-5">
        @include('components.card-team', [
          'data' => (object)([
            'team_photo' => asset('dist/media/people/jim.jpg'),
            'team_title' => 'Jim Wyban',
            'team_content' => "Dr Jim Wyban is internationally renowned and provides consulting services in breeding and hatchery systems for shrimp and other agriculture species. He is an entrepreneur in shrimp farming and built the foundation of SPF breeding lines, establishing the world’s first selectively bred stocks that have seen uptake throughout Asia-Pacific. His past roles have included President and Founder of High Health Aquaculture Inc. Hawaii and he is currently Director of Marine Genetics LLC Myanmar."
          ])
        ])
      </div> --}}
      <div class="col-lg-4 mb-5 d-flex">
        @include('components.card-team', [
          'data' => (object)([
            'team_photo' => asset('dist/media/people/matthew-west.jpg'),
            'team_title' => 'Matthew West',
            'team_content' => "Mr Matthew West is president of the Australian Prawn Farmers Association (APFA) and General Manager of Australian Prawn Farms. He has over 20 years of experience farming shrimp in Australia and managing our Queensland-based industry while working with state and national regulatory authorities."
          ])
        ])
      </div>
        <div class="col-lg-4 mb-5 d-flex">
        @include('components.card-team', [
          'data' => (object)([
            'team_photo' => asset('dist/media/people/hugo.jpg'),
            'team_title' => 'Hugo LeMessurier',
            'team_content' => "Mr Hugo LeMessurier is an experienced business strategist and biotechnology executive with 20 years of human and animal diagnostic and therapeutic experience. He has held directorships and senior management positions in start-up, listed and multinational organisations in the EU, US and Australia. Hugo specialises in commercialisation of new technologies across a range of early stage healthcare, food, defence, advisory and specialty chemical businesses."
          ])
        ])
      </div>
      {{-- <div class="col-lg-4 mb-5">
        @include('components.card-team', [
          'data' => (object)([
            'team_photo' => asset('dist/media/people/brent.jpg'),
            'team_title' => 'Brent Paddon',
            'team_content' => "Mr Brent Paddon is Co-Founder and Executive Director of Over the Wire Holdings Limited. He has over 20 years of experience in telecommunications and IT services sectors including the role of General Manager of Sales at PIPE Networks Pty Ltd. He brings experience in business operations and scale-up."
          ])
        ])
      </div> --}}
    </div>
  </div>
</div>
