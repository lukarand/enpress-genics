<div class="section section-team py-6 pt-md-9 pb-md-6">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="mb-2 text-dark">Our team</h2>
      <p>Genics has assembled a small, highly skilled team equipped to deliver.</p>
    </div>
    <div class="row">
      <div class="col-lg-4 mb-5 d-flex">
        @include('components.card-team', [
          'data' => (object)([
            'team_photo' => asset('dist/media/people/mel.jpg'),
            'team_title' => 'Melony Sellars',
            'team_content' => "Dr. Melony Sellars has 20 years of experience in Aquaculture, with an in-depth background in shrimp aquaculture. She has extensive expertise in the application of novel biotech solutions for industry, genetics and breeding programs."
          ])
        ])
      </div>
      <div class="col-lg-4 mb-5 d-flex">
        @include('components.card-team', [
          'data' => (object)([
            'team_photo' => asset('dist/media/people/peter.jpg'),
            'team_title' => 'Peter Blunt',
            'team_content' => "Mr Peter Blunt is a highly experienced general manager in technology related enterprises. He holds formal legal and accounting qualification and has over 25 years' practical experience in business development, operations and commercialisation of new technologies."
          ])
        ])
      </div>
      <div class="col-lg-4 mb-5 d-flex">
        @include('components.card-team', [
          'data' => (object)([
            'team_photo' => asset('dist/media/people/kate.jpg'),
            'team_title' => 'Kate Wersin',
            'team_content' => "Ms. Kate Wersin has over 15 years experience in human diagnostics and medical devices covering regulatory approvals across a broad range of products. She has experience in laboratory practices development and scale up activities."
          ])
        ])
      </div>
    </div>
  </div>
</div>
