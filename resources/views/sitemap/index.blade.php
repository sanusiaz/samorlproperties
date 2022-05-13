@php 
    header('Content-Type: application/xml');
    echo '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>';
@endphp

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>https://properties.samorl.com.ng/home</loc>
        <changefreq>weekly</changefreq>
    </url>
    <url>
        <loc>https://properties.samorl.com.ng/cities</loc>
        <changefreq>weekly</changefreq>
    </url>
    <url>
        <loc>https://properties.samorl.com.ng/contact-us</loc>
        <changefreq>weekly</changefreq>
    </url>
    <url>
        <loc>https://properties.samorl.com.ng/cookies-policy</loc>
        <changefreq>weekly</changefreq>
    </url>
    <url>
        <loc>https://properties.samorl.com.ng/privacy-policy</loc>
        <changefreq>weekly</changefreq>
    </url>
    <url>
        <loc>https://properties.samorl.com.ng/cookies-policy</loc>
        <changefreq>weekly</changefreq>
    </url>
    
    @foreach ($Categories as $category)
        <url>
            <loc>https://properties.samorl.com.ng/listings/category/{{ $category->name }}</loc>
            <lastmod>{{ $category->created_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.75</priority>
        </url>
    @endforeach
    
    @foreach ($Properties as $property)
        <url>
            <loc>https://properties.samorl.com.ng/listings/property/{{ $property->id }}</loc>
            <lastmod>{{ $property->created_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach
    
    
    @foreach ($Cities as $city)
        <url>
            <loc>https://properties.samorl.com.ng/listings/city/{{ $city->state }}/{{ $city->
            city_name}}</loc>
            <lastmod>{{ $city->created_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.64</priority>
        </url>
    @endforeach
</urlset>