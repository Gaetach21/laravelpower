@php echo '<?xml version="1.0" encoding="UTF-8"?>' @endphp
<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
   <sitemap>
      <loc>{{ route('sitemap.pages') }}</loc>
   </sitemap>
   <sitemap>
      <loc>{{ route('sitemap.posts') }}</loc>
      <lastmod>{{ $post->updated_at->format("Y-m-d") }}</lastmod>
   </sitemap>
</sitemapindex>