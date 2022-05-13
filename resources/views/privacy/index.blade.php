@extends('layouts.app')

@section('title', 'Privacy-Policy')

@php 
	$category = \App\Models\Category::class;
	$category = new $category;
	$categories = $category::all();
@endphp

@section('products_meta_tags')
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="Samorl Properties | Privacy - Policy">
    <meta name="twitter:title" content="Propeties for sale, to rent ....">
    <meta property="twitter:url" content="https://properties.samorl.com.ng/privacy-policy" />
    <meta name="twitter:description" content="Get Verified and featured property at fixed / negotiable price">
    <!-- Twitter Summary card images must be at least 120x120px -->
    <meta name="twitter:image" content="https://properties.samorl.com.ng/images/main_seo_image.jpg">
    
    
    <!-- Open Graph data -->
    <meta property="og:title" content="Samorl Properties | Privacy - Policy" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://properties.samorl.com.ng/privacy-policy" />
    <meta property="og:image" content="https://properties.samorl.com.ng/images/main_seo_image.jpg" />
    <meta property="og:description" content="Get Verified and featured property at fixed / negotiable price" />
    <meta property="og:site_name" content="Samorl Properties" />
@endsection


@section('content')

	<div class="flex flex-col items-center align-middle justify-center w-full h-52 text-center bg-cover bg-center short_banner relative"
		style="background-image: url('{{ asset('images/full-screen-2.png') }}'); background-repeat: no-repeat;">
		<span class="font-bold uppercase text-white text-2xl md:text-4xl block w-full az_custom_front tracking-wide break-words z-50 pb-12 capitalize" >Privacy Policy</span>

		<div class="rounded-lg bg-gray-100 p-4 md:p-5 lg:w-10/12 w-11/12 block mt-8 absolute top-28 z-50">

			@include('include.top_nav_search')
		</div>
	</div>

	<!-- Start Main -->
	<main class="p-0 m-0 mb-0 mt-10 mb-10 px-4 md:px-7 lg:px-20 relative overflow-hidden">
		<div id="main_property" class="block relative pt-16 md:pt-4 mt-40 md:mt-5 px-0 sm:px-3 lg:px-8">
			<div class="p-5 md:p-10 bg-white rounded block relative overflow-hidden">
				<h3 class="font-bold">Privacy Policy:</h3>

				<span class="py-5 relative block">
					Your privacy is important to us. It is Samorlproperty is a trading name of N and O Online Services policy ( ”A Nigerian registered Business”)’ to respect your privacy regarding any information we may collect from you across our website https://samorlproperty.com.ng/, and other sites we own and operate.
				</span>

				<h3 class="font-bold">Information We Collect:</h3>
				<ul class="pl-5">
					<li class="py-2 relative block leading-8">
						<span class="font-bold mr-4">*</span> Your privacy is important to us. It is Samorlproperty is a trading name of N and O Online Services policy ( ”A Nigerian registered Business”)’ to respect your privacy regarding any information we may collect from you across our website https://samorlproperty.com.ng/, and other sites we own and operate.
					</li>
					<li class="py-2 relative block leading-8">
						<span class="font-bold mr-4">*</span> Legal bases for processing <br>
							We will process your personal information lawfully, fairly and in a transparent manner. We collect and process information about you only where we have legal bases for doing so. These legal bases depend on the services you use and how you use them, meaning we collect and use your information only where: it’s necessary for the performance of a contract to which you are a party or to take steps at your request before entering into such a contract (for example, when we provide a service you request from us); it satisfies a legitimate interest (which is not overridden by your data protection interests), such as for research and development, to market and promote our services, and to protect our legal rights and interests; you give us consent to do so for a specific purpose (for example, you might consent to us sending you our newsletter); or we need to process your data to comply with a legal obligation.
					</li>
					<li class="py-2 relative block leading-8">
						<span class="font-bold mr-4">*</span> Collection and use of information <br>
							We may collect, hold, use and disclose information for the following purposes and personal information will not be further processed in a manner that is incompatible with these purposes: to enable you to customise or personalise your experience of our website; to enable you to access and use our website, associated applications and associated social media platforms; to contact and communicate with you; for internal record keeping and administrative purposes; for analytics, market research and business development, including to operate and improve our website, associated applications and associated social media platforms; to run competitions and/or offer additional benefits to you; for advertising and marketing, including to send you promotional information about our products and services and information about third parties that we consider may be of interest to you; to comply with our legal obligations and resolve any disputes that we may have; and to consider your employment application.
					</li>
					<li class="py-2 relative block leading-8">
						<span class="font-bold mr-4">*</span> Disclosure of personal information to third parties <br>
							We may disclose personal information to: third party service providers for the purpose of enabling them to provide their services, including (without limitation) IT service providers, data storage, hosting and server providers, ad networks, analytics, error loggers, debt collectors, maintenance or problem-solving providers, marketing or advertising providers, professional advisors and payment systems operators; our employees, contractors and/or related entities; sponsors or promoters of any competition we run; credit reporting agencies, courts, tribunals and regulatory authorities, in the event you fail to pay for goods or services we have provided to you; courts, tribunals, regulatory authorities and law enforcement officers, as required by law, in connection with any actual or prospective legal proceedings, or in order to establish, exercise or defend our legal rights; third parties, including agents or sub-contractors, who assist us in providing information, products, services or direct marketing to you; and third parties to collect and process data.
					</li>
					<li class="py-2 relative block leading-8">
						<span class="font-bold mr-4">*</span>International transfers of personal information<br>
							The personal information we collect is stored and processed in United Kingdom, or where we or our partners, affiliates and third-party providers maintain facilities. By providing us with your personal information, you consent to the disclosure to these overseas third parties.
							We will ensure that any transfer of personal information from countries in the European Economic Area (EEA) to countries outside the EEA will be protected by appropriate safeguards, for example by using standard data protection clauses approved by the European Commission, or the use of binding corporate rules or other legally accepted means. <br>

							Where we transfer personal information from a non-EEA country to another country, you acknowledge that third parties in other jurisdictions may not be subject to similar data protection laws to the ones in our jurisdiction. There are risks if any such third party engages in any act or practice that would contravene the data privacy laws in our jurisdiction and this might mean that you will not be able to seek redress under our jurisdiction’s privacy laws.
					</li>
					<li class="py-2 relative block leading-8">
						<span class="font-bold mr-4">*</span>Your rights and controlling your personal information<br>
							Choice and consent: By providing personal information to us, you consent to us collecting, holding, using and disclosing your personal information in accordance with this privacy policy. If you are under 16 years of age, you must have, and warrant to the extent permitted by law to us, that you have your parent or legal guardian’s permission to access and use the website and they (your parents or guardian) have consented to you providing us with your personal information. You do not have to provide personal information to us, however, if you do not, it may affect your use of this website or the products and/or services offered on or through it. Information from third parties: If we receive personal information about you from a third party, we will protect it as set out in this privacy policy. If you are a third party providing personal information about somebody else, you represent and warrant that you have such person’s consent to provide the personal information to us. <br>

							Restrict: You may choose to restrict the collection or use of your personal information. If you have previously agreed to us using your personal information for direct marketing purposes, you may change your mind at any time by contacting us using the details below. If you ask us to restrict or limit how we process your personal information, we will let you know how the restriction affects your use of our website or products and services.
							Access and data portability: You may request details of the personal information that we hold about you. You may request a copy of the personal information we hold about you. Where possible, we will provide this information in CSV format or other easily readable machine format. You may request that we erase the personal information we hold about you at any time. You may also request that we transfer this personal information to another third party. <br>
							Correction: If you believe that any information we hold about you is inaccurate, out of date, incomplete, irrelevant or misleading, please contact us using the details below. We will take reasonable steps to correct any information found to be inaccurate, incomplete, misleading or out of date.
							Notification of data breaches: We will comply laws applicable to us in respect of any data breach. <br>

							Complaints: If you believe that we have breached a relevant data protection law and wish to make a complaint, please contact us using the details below and provide us with full details of the alleged breach. We will promptly investigate your complaint and respond to you, in writing, setting out the outcome of our investigation and the steps we will take to deal with your complaint. You also have the right to contact a regulatory body or data protection authority in relation to your complaint.
					</li>
					<li class="py-2 relative block leading-8">
						<span class="font-bold mr-4">*</span>Cookies<br>
							We use “cookies” to collect information about you and your activity across our site. A cookie is a small piece of data that our website stores on your computer, and accesses each time you visit, so we can understand how you use our site. This helps us serve you content based on preferences you have specified. Please refer to our Cookie Policy for more information. <br>
							• Business transfers
							If we or our assets are acquired, or in the unlikely event that we go out of business or enter bankruptcy, we would include data among the assets transferred to any parties who acquire us. You acknowledge that such transfers may occur, and that any parties who acquire us may continue to use your personal information according to this policy. <br>
							• Limits of our policy
							Our website may link to external sites that are not operated by us. Please be aware that we have no control over the content and policies of those sites, and cannot accept responsibility or liability for their respective privacy practices. <br>
							• Changes to this policy
							At our discretion, we may change our privacy policy to reflect current acceptable practices. We will take reasonable steps to let users know about changes via our website. Your continued use of this site after any changes to this policy will be regarded as acceptance of our practices around privacy and personal information. <br>

							If we make a significant change to this privacy policy, for example changing a lawful basis on which we process your personal information, we will ask you to re-consent to the amended privacy policy. <br>

							Samorl Property is a  Data Controller <br>
							Samorl Property Compliance dept: info@samorlproperty.ng <br>
							This policy is effective as of 1 January 2022. 
					</li>
				</ul>
			</div>
		</div>
	</main>
	<!-- End Main -->
@endsection