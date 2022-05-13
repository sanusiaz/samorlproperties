@extends('layouts.app')

@section('title', 'Terms-and-Conditions')

@php 
	$category = \App\Models\Category::class;
	$category = new $category;
	$categories = $category::all();
@endphp

@section('products_meta_tags')
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="Samorl Properties | Terms and Conditions">
    <meta name="twitter:title" content="Propeties for sale, to rent ....">
    <meta property="twitter:url" content="https://properties.samorl.com.ng/terms-and-conditions" />
    <meta name="twitter:description" content="Get Verified and featured property at fixed / negotiable price">
    <!-- Twitter Summary card images must be at least 120x120px -->
    <meta name="twitter:image" content="https://properties.samorl.com.ng/images/main_seo_image.jpg">
    
    
    <!-- Open Graph data -->
    <meta property="og:title" content="Samorl Properties | Terms and Conditions" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://properties.samorl.com.ng/terms-and-conditions" />
    <meta property="og:image" content="https://properties.samorl.com.ng/images/main_seo_image.jpg" />
    <meta property="og:description" content="Get Verified and featured property at fixed / negotiable price" />
    <meta property="og:site_name" content="Samorl Properties" />
@endsection


@section('content')

	<div class="flex flex-col items-center align-middle justify-center w-full h-52 text-center bg-cover bg-center short_banner relative"
		style="background-image: url('{{ asset('images/full-screen-2.png') }}'); background-repeat: no-repeat;">
		<span class="font-bold uppercase text-white text-2xl md:text-4xl block w-full az_custom_front tracking-wide break-words z-50 pb-12 capitalize" >Terms and Conditions</span>

		<div class="rounded-lg bg-gray-100 p-4 md:p-5 lg:w-10/12 w-11/12 block mt-8 absolute top-28 z-50">

			@include('include.top_nav_search')
		</div>
	</div>

	<!-- Start Main -->
	<main class="p-0 m-0 mb-0 mt-10 mb-10 px-4 md:px-7 lg:px-20 relative overflow-hidden">
		<div id="main_property" class="block relative pt-16 md:pt-4 mt-40 md:mt-5 px-0 sm:px-3 lg:px-8">
			<div class="p-5 md:p-10 bg-white rounded block relative overflow-hidden">
				<h3 class="font-bold">Terms of Service:</h3>

				<span class="py-5 relative block">
					Terms By accessing the website at https://listproperty.ng/, you are agreeing to be bound by these terms of service, all applicable laws and regulations, and agree that you are responsible for compliance with any applicable local laws. ( ” List Property is a trading name of N & O Online Services – ”A Nigerian Registered Business” ) . List Property is a free classified ads listing website. If you do not agree with any of these terms, you are prohibited from using or accessing this site. The materials contained in this website are protected by applicable copyright and trademark law.
				</span>
				<span class="py-5 relative block">
					Use License Permission is granted to temporarily download one copy of the materials (information or software) on List Property ’s website for personal, non-commercial transitory viewing only. This is the grant of a license, not a transfer of title, and under this license you may not: modify or copy the materials; use the materials for any commercial purpose, or for any public display (commercial or non-commercial); attempt to decompile or reverse engineer any software contained on List Property’s website; remove any copyright or other proprietary notations from the materials; or transfer the materials to another person or “mirror” the materials on any other server. This license shall automatically terminate if you violate any of these restrictions and may be terminated by List Property ”a trading name of N & O Online Services” at any time. Upon terminating your viewing of these materials or upon the termination of this license, you must destroy any downloaded materials in your possession whether in electronic or printed format.
				</span>

				<h3 class="font-semibold">Indemnification</h3>
				<span class="py-5 relative block">
				You agree to indemnify, defend and hold us and our affiliated companies, shareholders, officers, directors, employees, agents or suppliers harmless from any and all claims or demands, made by any third party due to or arising out of your use of this Website or through your password or otherwise, the violation of these Terms of Use by you, or the infringement by you of any intellectual property or other right of any other person or entity. <br> <br>

				<i>Viruses</i>
				We do not guarantee that the Websites will be secure or free from bugs or viruses. You are responsible for configuring your information technology, computer programme and platform in order to access the Websites. You should use your own virus protection software. You must not misuse the Websites by knowingly introducing viruses, trojans, worms, logic bombs or other material which is malicious or technologically harmful. You must not attempt to gain unauthorised access to the Websites, the server on which the Websites are stored or any server, computer or database connected to the Websites. <br> <br>

				We will not be liable for any loss or damage caused by a virus, distributed denial-of-service attack, or other technologically harmful material that may infect your computer equipment, computer programs, data or other proprietary material due to your use of our site or to your downloading of any content on it, or on any website linked to it.
				</span>

				<h3 class="font-semibold">Your Responsibilities</h3>
				<span class="py-5 relative block">
					You are responsible for checking, confirming and satisfying yourself as to the accuracy of any Details. <br>
					You are responsible for instructing a surveyor and obtaining legal advice before committing to any purchase.
					You are responsible for ensuring that you act in good faith towards any other parties. <br> <br>

					We are not an estate agency and we provide a service whereby agents may market and you may view property details (‘Details’) together with other content hosted and developed by us. Agents are responsible for preparing the Details and fielding enquiries directly from you. We do not get involved in any communications between you and agents and we do not participate in any part of the transaction. <br> <br>

					Details are hosted by us in good faith but are produced directly by agents and have not been verified by us. You are responsible for making your own enquiries and we provide no guarantee and accept no responsibility for the accuracy or completeness of any information contained within the Details
				</span>

				<h3 class="font-bold text-lg">Registering on our Website/s</h3>
				<h3 class="font-semibold">Restrictions On Use:</h3>
				<ul class="pl-5">
					<li class="py-2 relative block leading-8">
						<span class="font-bold mr-4">*</span> You agree not to transmit any material designed to interrupt, damage, destroy or limit the functionality of our website or the Services.
					</li>
					<li class="py-2 relative block leading-8">
						<span class="font-bold mr-4">*</span> You agree not to use any automated software to view the Services without consent and to only access our Services manually.
					</li>
					<li class="py-2 relative block leading-8">
						<span class="font-bold mr-4">*</span> You agree not to use the Services other than for your own personal use or as an agent listing properties for sale and to rent.
					</li>
					<li class="py-2 relative block leading-8">
						<span class="font-bold mr-4">*</span> You agree not to attempt to copy our data or reverse engineer our processes without our consent.
					</li>
					<li class="py-2 relative block leading-8">
						<span class="font-bold mr-4">*</span>You agree not to use our Services in any manner that is illegal, immoral or harmful to us.
					</li>
					<li class="py-2 relative block leading-8">
						<span class="font-bold mr-4">*</span> You agree not to use our Services in breach of any policy or other notice on our website.
					</li>
					<li class="py-2 relative block leading-8">
						<span class="font-bold mr-4">*</span> You agree not to transmit materials protected by copyright without the permission of the owner.
					</li>
					<li class="py-2 relative block leading-8">
						<span class="font-bold mr-4">*</span>You agree not to interfere with any other user’s enjoyment of our website or the Services.
					</li>
					<li class="py-2 relative block leading-8">
						<span class="font-bold mr-4">*</span>You agree not to remove or alter any copyright notices that appear on our website.
					</li>
					<li class="py-2 relative block leading-8">
						<span class="font-bold mr-4">*</span>You agree not to publish any material that may encourage a breach of any relevant laws or regulations.
					</li>
					<li class="py-2 relative block leading-8">
						<span class="font-bold mr-4">*</span>You agree not to conduct yourself in an offensive or abusive manner whilst using our website or the Services.
					</li>
					<li class="py-2 relative block leading-8">
						<span class="font-bold mr-4">*</span>You agree not to attempt to bypass restrictions on user accounts.
					</li>
					<li class="py-2 relative block leading-8">
						<span class="font-bold mr-4">*</span>You agree not to use our website in any way that is unethical, unlawful, illegal, fraudulent or harmful, or in connection with any unlawful, illegal, fraudulent or harmful purpose or activity; such activity will attract a permanent ban from our website and we will report to the relevant authorities.
					</li>
				</ul>

				<h3 class="font-semibold">Materials you provide on our website/s:</h3>
				<span class="py-5 relative block">By submitting content on our Websites or otherwise providing content to us (“Content”), you grant us a worldwide, royalty-free, perpetual, irrevocable, non-exclusive, sub-licensable and fully transferable licence to use, reproduce, display, sell, modify and edit the Content. You waive any moral rights you may have in the Content. We will not pay you any fees for the Content and reserve the right in our sole discretion to remove or edit it at any time. You warrant and represent that you have all rights necessary to grant us these rights. We will permit you to post Content on our Websites in accordance with our procedures and provided that the content is not illegal, obscene, abusive, threatening, defamatory or otherwise objectionable to us. Any personal data that you provide via, or in connection with, the Websites will be governed by our <b> <a href="{{ url('/privacy-policy') }}">privacy policy</a></b>. 
				</span>

				<h3 class="font-semibold">Links:</h3>
				<span class="py-5 relative block">List Property has not reviewed all of the sites linked to its website and is not responsible for the contents of any such linked site. The inclusion of any link does not imply endorsement by List Property of the site. Use of any such linked website is at the user’s own risk.
				</span>

				<h3 class="font-semibold">Accuracy of materials:</h3>
				<span class="py-5 relative block">The materials appearing on List Property ’s website could include technical, typographical, or photographic errors. List Property ”a trading name of TROL LTD” does not warrant that any of the materials on its website are accurate, complete or current. List Property ”a trading name of TROL LTD” may make changes to the materials contained on its website at any time without notice. However List Property does not make any commitment to update the materials.
				</span>

				<h3 class="font-semibold">Governing Law:</h3>
				<span class="py-5 relative block">
					By becoming a Registered User, you warrant that: <br> <br>

					(a) you are legally capable of entering into binding contracts; and <br> <br>

					(b) you are at least 18 years old or if you are a Minor you have the prior written consent of your parent or guardian to become Registered User. <br> <br>

					9.1 Your application to become a Registered User constitutes an offer by you to us to enter into a binding contract with us to become a Registered User. We do not have to accept your application. We will act in accordance with the law when deciding whether or not to accept your application <br> <br>

					9.2 A contract, in relation to your use of List Property as a Registered User, will come into existence and these Terms shall become binding on you in respect of such use and us when you begin to use as a List Property Registered User.<br> <br>

					9.3 No Ads that relates to spiritual and psychic services. This is strictly a business platform.<br> <br>

					9.4 We reserve the right to suspend or terminate your List Property account immediately and without notice if any of these Terms are violated.<br> <br>

					9.5 No adult products or services. We take a zero tolerance to ads of any sexual nature whether implicit or explicit.<br> <br>

					9.6 No adware/malware or illegal downloads (pirated content)<br> <br>

					9.7 No hate speech, violence, offensive/abusive language or ads targeting an individual or company.<br> <br>

					9.8 No firearms Ads<br> <br>

					9.9 Do not post content that infringes the rights of third parties. This includes, but is not limited to, content that infringes on intellectual property rights such as copyright, design and trademark (e.g. offering counterfeit items for sale)<br> <br>
				</span>
				<div class="bg-white rounded p-3 block relative overflow-hidden pt-0">
					<h3 class="font-bold">Modification</h3>
					<span class="py-5 block relative">
						List Property may revise these terms of service for its website at any time without notice. By using this website you are agreeing to be bound by the then current version of these terms of service. <br><br>

						We reserve the right in our sole discretion to change these Terms of Use at any time without prior notice to you. Any changes will be posted on our website and become effective at the time of posting. Your continued use of the Services after the effective date of such changes will constitute acceptance of and agreement to any such changes. We reserve the right to modify, suspend or discontinue all or part of the Services at any time to you and/or others, with or without notice. We shall not be liable to you or any other party should we exercise our right to modify, suspend or discontinue all or part of the Services.
					</span>

					<h3 class="font-bold">Liability</h3>
					<span class="py-5 block relative">
						10.0 Nothing in these terms shall limit our liability for fraudulent misrepresentation, or for death or personal injury resulting from our negligence or the negligence of our agents or employees. You agree not to hold us responsible for things other users post or do. <br> <br>

						We do not always review users’ postings and are not involved in the transactions between users. As most of the content on List Property comes from other users, we do not guarantee the accuracy of postings or quality, safety, or legality of what’s offered. <br> <br>

						In no event do we accept liability of any description for the posting of any unlawful, abusive, illegal, defamatory or obscene information, or material of any kind which violates or infringes upon the rights of any other person, including without limitation to any transmissions constituting or encouraging conduct that would constitute a criminal offence, giving rise to civil liability or otherwise violate any applicable law.<br>  <br>

						You acknowledge that we cannot guarantee continuous, error-free or secure access to our services or that defects in the service will be corrected. While we will use reasonable efforts to maintain an uninterrupted service, we cannot guarantee this and we do not give any promises or warranties (whether express or implied) about the operation and availability of our sites, services, applications or tools. <br>  <br>

						10.1 English is the only language in which our contract may be concluded <br>

						<span class="py-2">
							These Terms of Use were last updated December, 2021
						</span>
					</span>
				</div>
			</div>
		</div>
	</main>
	<!-- End Main -->
@endsection