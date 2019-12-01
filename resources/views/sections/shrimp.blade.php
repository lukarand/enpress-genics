<div class="section section-shrimp py-9">
  <div class="container pt-1 pb-2">
    <div class="d-flex justify-content-center">
      <div class="text-center text-white">
        <h2>Shrimp <span class="font-weight-normal">Multi</span>Path</h2>
        <div class="csiro-logo text-center py-3">
          <img src="{{asset('dist/media/logos/csiro-shrimp-multipath.png')}}">
        </div>
        <p class="shrimp-header">Smart detection system that will cut testing costs for Aussie prawn farmers and transform how shrimp diseases are managed globally.</p>
      </div>    
    </div>
    <div class="d-flex flex-wrap justify-content-center justify-content-sm-between pt-5 pt-md-9">
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
    <div class="d-flex justify-content-center py-9">
      <a class="btn btn-outline-primary btn-lg text-white title-underline-gradient d-flex justify-content-center align-items-center" href="/services#introduce-multipath">MORE ABOUT Shrimp <b>Multi</b>Path</a>
    </div>
    <div class="d-flex justify-content-center">
      <div class="text-center text-white mt-11">
        <h2>Shrimp <span class="font-weight-normal">ID</span></h2>
        <div class="csiro-logo text-center py-3">
          <img src="{{asset('dist/media/logos/csiro-shrimp-id.png')}}">
        </div>
        <p class="shrimp-header">Heritage panels that determine stock pedigree and genetic relationship, empowering farmers to make smart breeding choices.</p>
      </div>    
    </div>
    <div class="d-flex flex-wrap justify-content-center justify-content-sm-between pt-5 pt-md-9">
      @include ('components.card-icon', [
        'data' => (object)([
          'text_width' => '176px',
          'icon_name' => 'icon-shrimp',
          'icon_content' => 'Includes Pacific White  (<span class="font-style-italic">Litopenaeus vannamei</span>) and Black Tiger  (<span class="font-style-italic">Penaeus monodon</span>)  Shrimp ID panels'
        ])
      ])
      @include ('components.card-icon', [
        'data' => (object)([
          'animation' => true,
          'text_width' => '183px',
          'icon_name' => 'icon-dna',
          'icon_content' => 'Based on DNA Single Nucleotide Polymorphism (SNP) markers, selected for high end performance by CSIRO'
        ])
      ])
      @include ('components.card-icon', [
        'data' => (object)([
          'animation' => true,
          'icon_name' => 'icon-tree',
          'icon_content' => '120 SNP required for stock pedigree and genetic relationship determination'
        ])
      ])
      @include ('components.card-icon', [
        'data' => (object)([
          'animation' => true,
          'icon_name' => 'icon-paper',
          'icon_content' => 'Delivers powerful pedigree/relationship assignment, ideal for maximising genetic diversity'
        ])
      ])
      @include ('components.card-icon', [
        'data' => (object)([
          'animation' => true,
          'icon_name' => 'icon-tick',
          'icon_content' => 'Includes control tests to confirm DNA sample integrity'
        ])
      ])
    </div>
    <div class="text-center mt-5">
      <a class="btn btn-outline-primary btn-lg text-white" href="/services/#introduce-id">MORE ABOUT Shrimp ID</a>
    </div>
  </div>
</div>
