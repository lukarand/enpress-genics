<div class="section section-shrimp py-6 py-md-9" id="introduce-multipath">
  <div class="container">
    <div class="mt-5 mb-6 mb-md-9 text-white text-center">
      <h2>Introducing Shrimp <span class="font-weight-normal">Multi</span>Path</h2>
      <div class="csiro-logo text-center py-3">
        <img src="{{asset('dist/media/logos/csiro-shrimp-multipath.png')}}">
      </div>
    </div>
    <div class="d-flex flex-wrap justify-content-center justify-content-sm-between">
      @include ('components.card-icon', [
          'data' => (object)([
            'animation' => true,
            'icon_name' => 'icon-13',
            'icon_content' => 'Detects 13 pathogens, including all that severely impact shrimp aquaculture, in a single test'
          ])
        ])
        @include ('components.card-icon', [
          'data' => (object)([
            'animation' => true,
            'icon_name' => 'icon-dna',
            'icon_content' => 'Identifies different genetic variants of relevant pathogens'
          ])
        ])
        @include ('components.card-icon', [
          'data' => (object)([
            'animation' => true,
            'icon_name' => 'icon-graph',
            'icon_content' => 'Includes controls to validate every test result and quantify infection severity'
          ])
        ])
        @include ('components.card-icon', [
          'data' => (object)([
            'animation' => true,
            'icon_name' => 'icon-paper',
            'icon_content' => 'Includes control tests to validate RNA and/or DNA sample integrity'
          ])
        ])
        @include ('components.card-icon', [
          'data' => (object)([
            'animation' => true,
            'icon_name' => 'icon-clock',
            'icon_content' => 'Rapidly generates results on large numbers of samples with fast data turnaround times'
          ])
        ])
    </div>
  </div>
</div>