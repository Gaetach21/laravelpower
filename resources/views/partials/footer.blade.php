    <footer>
     <div class="col">
      <strong>Laravelpower</strong> 
       <ul>
        <li><a href="{{ route('sitemap.index') }}">Plan du site</a></li>
        <li><a href="{{ route('terms') }}">Conditions d'utilisation</a></li>
        <li><a href="{{ route('privacy') }}">Politique de confidentialité</a></li>
      </ul>
      </div>
      
       <div class="col">
      <strong>A propos du web</strong> 
       <ul>
       <li><a href="{{ route('historique') }}">Historique</a></li>
       <li><a href="{{ route('hebergement') }}">Hébergement web</a></li>
        <li><a href="{{ route('domain') }}">Nom de domaine</a></li>
      </ul>
      </div>
      
      
         <div class="col">
      <strong>suivez-nous</strong> 
       <ul>       
        <li><a href="https://api.whatsapp.com/send?phone=237679298838" title="Suivez-nous sur WhatsApp">
        <img src="{{ asset('images/whatsapp.png') }}" alt="whatsapp" />WhatsApp</a></li>

        
        <li><a href="https://m.facebook.com/profile.php?id=100094428570698" title="Suivez-nous sur Facebook">
        <img src="{{ asset('images/facebook.png') }}" alt="facebook" />Facebook</a></li>
      </ul>
      </div>
      
      <div class="bottom">Built with <span class="text-primary">&hearts;</span> by TACHAGO Gaetan<br />
      &copy; Copyright Laravelpower {{ date('Y') }}   &middot; Tous droits réservés</div>
    </footer> 