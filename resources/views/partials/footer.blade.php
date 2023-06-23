    <footer>
     <div class="col">
      <strong>Laravelpower</strong> 
       <ul>
        <li><a href="#">Plan du site</a></li>
        <li><a href="#">Conditions d'utilisation</a></li>
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
        <li><a href="#" title="Suivez-nous sur WhatsApp">
        <img src="{{ asset('images/whatsapp.png') }}" alt="whatsapp" />WhatsApp</a></li>
        
        <li><a href="#" title="Suivez-nous sur Twitter">
        <img src="{{ asset('images/twitter.png') }}" alt="twitter" />Twitter</a></li>
        
        <li><a href="#" title="Suivez-nous sur Facebook">
        <img src="{{ asset('images/facebook.png') }}" alt="facebook" />Facebook</a></li>
      </ul>
      </div>
      
      <div class="bottom">Built with &hearts; by TACHAGO Gaetan<br />
      &copy; Copyright Laravelpower {{ date('Y') }}   &middot; Tous droits réservés</div>
    </footer> 