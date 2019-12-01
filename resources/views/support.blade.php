@extends('layouts.app')
@section ('content')
  @include('sections.hero', [
      'data' => (object)([
        'hero_image' => asset('dist/media/hero-image/hero-support-image.jpg'),
        'hero_title' => 'Support',
        'hero_content' => ""
      ])
    ])
    @include('sections.support', [
      'data' => (object)([
        'support_title' => '',
        'support_content' => "To place an order for testing services please visit our <a href='/order-testing'>Order Testing</a> page. For a list of frequently asked questions please see below.<br></br>Should you have further questions please call us on 1300 895 515 or visit our <a href='/contact'>Contact page</a> to submit your enquiry."
      ])
    ])
    @include('sections.support', [
      'data' => (object)([
        'back_color' => 'bg-light',
        'support_title' => 'Is Shrimp <span class="font-weight-bold">Multi</span>Path quantitative?',
        'support_content' => "Yes, Shrimp <b>Multi</b>Path is quantitative and can tell you how many copies of template are present in a sample. Please contact us at <a href='mailto:info@genics.com.au'>info@genics.com.au</a> for detailed information."
      ])
    ])
    @include('sections.support', [
      'data' => (object)([
        'support_title' => 'How sensitive is Shrimp <span class="font-weight-bold">Multi</span>Path?',
        'support_content' => "Shrimp <b>Multi</b>Path has unrivalled sensitivity compared to other pathogen detection products on the market. Shrimp <b>Multi</b>Path detects down to 0.5-1 copies of template. Please contact us at <a href='mailto:info@genics.com.au'>info@genics.com.au</a> for detailed information."
      ])
    ])
    @include('sections.support', [
      'data' => (object)([
        'back_color' => 'bg-light',
        'support_title' => 'How much sample is required for a Shrimp <span class="font-weight-bold">Multi</span>Path or Shrimp ID test?',
        'support_content' => "The Shrimp <b>Multi</b>Path and ID assays require minimal input tissue. A 3 mm piece of pleopod tip is enough for running both assays, making Shrimp <b>Multi</b>Path and ID assays ideal for non-destructive testing of valuable stocks. Contact our customer support team at <a href='mailto:info@genics.com.au'>info@genics.com.au</a> for more information."
      ])
    ])
    @include('sections.support', [
      'data' => (object)([
        'support_title' => 'How much does Shrimp <span class="font-weight-bold">Multi</span>Path and Shrimp ID cost?',
        'support_content' => "Shrimp <b>Multi</b>Path and ID assays have a cost base no different to conventional and real-time PCR. However, Shrimp <b>Multi</b>Path and ID have unsurpassed high-throughput capability underpinning delivery of significant cost-savings and improved data turnaround times. Contact our sales team <a href='mailto:sales@genics.com.au'>sales@genics.com.au</a> to obtain a pricing schedule tailored to your needs."
      ])
    ])
    @include('sections.support', [
      'data' => (object)([
        'back_color' => 'bg-light',
        'support_title' => 'Which pathogens does Shrimp <span class="font-weight-bold">Multi</span>Path detect?',
        'support_content' => "Shrimp <b>Multi</b>Path detects 13 commercially important pathogens of shrimp as well as various genetic variants. Contact our research and development team at <a href='mailto:info@genics.com.au'>info@genics.com.au</a> if you would like customised pathogen assays added to Shrimp <b>Multi</b>Path.<br/><br/>Pathogens detected by Shrimp <b>Multi</b>Path include White spot syndrome virus (WSSV), Yellow head virus (YHV) variants 1-7, Mourilyan virus (MoV), Taura syndrome virus (TSV), Infectious myonecrosis virus (IMNV), Laem-Singh necrosis virus (LSNV), Hepatopancreatic parvovirus (HPV), Monodon baculovirus (MBV), Infectious hypodermal and hematopoietic necrosis virus (IHHNV), Pir A toxin gene, Pir B toxin gene, Enterocytozoon hepatopenaei (EHP), and Necrotising hepatopancreatis (NHP). Shrimp <b>Multi</b>Path differentiates between all 7 YHV variants using independent variant specific targets. YHV2 is also known as Gill associated virus (GAV). HPV is also known as Hepatopancreatic densovirus (HDV). Shrimp <b>Multi</b>Path detects the endogenous shrimp Bactin gene and can differentiate between shrimp species."
      ])
    ])
    @include('sections.support', [
      'data' => (object)([
        'support_title' => 'Is there a minimal sample submission requirement?',
        'support_content' => "The minimal sample submission is 92 samples with no upper limit. Contact us <a href='sales@genics.com.au'>sales@genics.com.au</a> to discuss your volume needs and options for a lower minimal sample submission number if required for preliminary trials."
      ])
    ])
    @include('sections.support', [
      'data' => (object)([
        'back_color' => 'bg-light',
        'support_title' => 'How is Shrimp <span class="font-weight-bold">Multi</span>Path data reported?',
        'support_content' => "Customised reports are made available electronically once Shrimp <b>Multi</b>Path assay data passes QC. An example of a customer report template will be available soon - in the meantime get in touch via our <a href='/contact'>Contact Us</a> page."
      ])
    ])
    @include('sections.support', [
      'data' => (object)([
        'support_title' => 'What preservative do I use?',
        'support_content' => "Preservative choice will depend on your sample tissue type and country of origin.  We generally use 70% high quality ethanol however to ensure a suitable preservative is used for your samples consultation with our sales team <a href='mailto:sales@genics.com.au'>sales@genics.com.au</a> is advised."
      ])
    ])
@endsection
