@extends('master')

@section('content')

<style>
.card {
    position: relative;
    z-index: 10;
}

#wrapper {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
    overflow: hidden;
}

/* .particle {
    position: absolute;
    border-radius: 50%;
    background-color: rgba(0, 123, 255, 0.5);
} */
</style>


    <div class="container-fluid">
      
        <div class="d-flex justify-content-center align-items-center">
            <h2>This is the example of HTML Canvas</h2>
        </div>

        <br><br>

        <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center">Login</h5>
                            <form>
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" placeholder="Password">
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        <p>
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#modalInfo" aria-expanded="false" aria-controls="collapseExample">
                <i class="fa-solid fa-code"></i>
                View Source Code
            </button>
        </p>
        <div class="container mt-4">            
                <div class="code-snippet collapse" id="modalInfo">
                    <div class="code-title">Code</div>
                    <button class="copy-button">Copy Code</button>
                        <pre>
                            <code class="language-html">
&lt;div id=&quot;animation-container&quot;&gt;&lt;/div&gt;
                        </code>
                    </pre>
            </div>
        </div>
    <br>
    </div>

    <div id="animation-container"></div>









    
    <script>
        window.onload = function() {
            var container = document.getElementById('animation-container');
            var particles = [];
            var particleCount = 100;

            function Particle() {
                this.x = Math.random() * window.innerWidth;
                this.y = Math.random() * window.innerHeight;
                this.vx = Math.random() * 2 - 1;
                this.vy = Math.random() * 2 - 1;
                this.size = Math.random() * 5;
                this.element = document.createElement('div');
                this.element.classList.add('particle');
                this.element.style.width = this.size + 'px';
                this.element.style.height = this.size + 'px';
                this.element.style.left = this.x + 'px';
                this.element.style.top = this.y + 'px';
                container.appendChild(this.element);
            }

            Particle.prototype.update = function() {
                this.x += this.vx;
                this.y += this.vy;
                if (this.x < 0 || this.x > window.innerWidth) this.vx *= -1;
                if (this.y < 0 || this.y > window.innerHeight) this.vy *= -1;
                this.element.style.left = this.x + 'px';
                this.element.style.top = this.y + 'px';
            }

            for (var i = 0; i < particleCount; i++) {
                particles.push(new Particle());
            }

            function animate() {
                particles.forEach(function(p) {
                    p.update();
                });
                requestAnimationFrame(animate);
            }

            animate();
        };
    </script>

@endsection