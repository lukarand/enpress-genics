<div class="section section-shrimp py-6 py-md-9" id="introduce-id">
  <div class="container">
    <div class="mt-5 mb-6 mb-md-9 text-white text-center">
      <h2>Introducing Shrimp<span class="font-weight-normal">ID</span></h2>
      <div class="csiro-logo text-center py-3">
        <img src="{{asset('dist/media/logos/csiro-shrimp-id.png')}}">
      </div>
      <p class="shrimp-header">Heritage panels that determine stock pedigree and genetic relationship, empowering farmers to make smart breeding choices.</p>
    </div>
    <div class="d-flex flex-wrap justify-content-center justify-content-sm-between pt-5 pt-md-9">
      @include ('components.card-icon', [
        'data' => (object)([
          'text_width' => '176px',
          'icon_name' => 'icon-shrimp',
          'icon_content' => 'Includes Pacific White  (<span class="font-style-italic">Litopenaeus vannamei</span>) and Black Tiger (<span class="font-style-italic">Penaeus monodon</span>)  Shrimp ID panels'
        ])
      ])
      @include ('components.card-icon', [
        'data' => (object)([
          'text_width' => '183px',
          'animation' => true,
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
  </div>
</div>
