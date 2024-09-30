<?php 
    function Navbar() {
        return '
<nav class="navbar">
      <a href="/MatchaTi/post-test-4" class="nav-heading">Commit</a>
      <div class="nav-option nav-link">
        <a href="#about">About</a>
        <a href="#features">Features</a>
        <a href="#testimoni">Testimoni</a>
      </div>
      <div class="nav-option">
        <button class="btn toggler-mode">🌞</button>
        <a href="pages/register" class="btn btn-primary btn-user">Register</a>
        <button class="btn btn-hamburger">[x]</button>
      </div>
    </nav>
        ';
    }
?>