<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive ID Cards</title>
  <style>

          .custom-navbar {
            background-color: white;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .custom-navbar ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: space-around;
        }
        .custom-navbar li a {
            text-decoration: none;
            cursor: pointer;
            color: #4a4a4a;
            font-size: 20px;
            padding: 10px 15px;
            border-radius: 10px;
            transition: all 0.3s ease;
        }
        .custom-navbar li a:hover,
        .custom-navbar li a.active {
            background-color: #F4FA58;
            color: black;
        }

    
    .container {
      width: 100%;
      max-width: 1200px;
      margin: 0 auto;
    }
    
    .card-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
      gap: 30px;
      width: 100%;
      justify-content: center;
    }
    
    .id-card {
      width: 105%;
      height: 230px;
      background-color: white;
      border-radius: 12px;
      box-shadow: 0 6px 16px rgba(0, 0, 0, 0.12);
      position: relative;
      overflow: hidden;
      display: flex;
      transition: all 0.3s ease;
    }
    
    .id-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }
    
    .accent-top {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 8px;
    }
    
    .profile-section {
      flex: 1;
      padding: 30px 20px 20px;
      display: flex;
      flex-direction: column;
      align-items: center;
      border-right: 1px solid #f0f0f0;
    }
    
    .profile-image {
      width: 90px;
      height: 90px;
      border-radius: 20%;
      background-color: #f2f2f2;
      margin-bottom: 15px;
      position: relative;
      overflow: hidden;
      border: 3px solid #f8f8f8;
      box-shadow: 0 3px 8px rgba(0, 0, 0, 0.1);
    }
    
    .profile-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    
    .qr-code {
      width: 60px;
      height: 60px;
      margin-top: 5px;
      background-color: #f8f8f8;
      border: 1px solid #eee;
    }
    
    .info-section {
      flex: 1.5;
      padding: 10px 20px 20px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }
    
    .logo {
      display: flex;
      align-items: center;
      font-size: 15px;
      font-weight: 600;
      color: #333;
    }
    
    .logo img {
      margin-right: 8px;
    }
    
    .nameof {
      font-size: 18px;
      font-weight: 600;
      color: #333;
      margin: 0;
    }
    
    .title {
      font-size: 14px;
      color: #666;
      margin: 5px 0 12px;
    }
    
    .details {
      font-size: 12px;
      color: #555;
      margin: 4px 0;
      display: flex;
    }
    
    .details .label {
      width: 80px;
      color: #888;
    }
    
    
    /* Responsive adjustments */
    @media (max-width: 480px) {
      .info-section {
        padding: 20px 10px 10px;
      }
      
      .logo {
        font-size: 12px;
      }
      
      .logo img {
        width: 40px;
      }
      
      .nameof {
        font-size: 14px;
      }
      
      .title {
        font-size: 12px;
        margin: 2px 0 8px;
      }
      
      .details {
        font-size: 10px;
      }
      
      .details .label {
        width: 60px;
      }
      
      .footer {
        font-size: 9px;
        margin-top: 10px;
      }
    }
  </style>
</head>
<body>
<nav class="custom-navbar mb-4">
        <ul>
            <li><a class="active" href="#">Informations</a></li>
            <li><a >Contact</a></li>
        </ul>
    </nav>
  <div class="container">
    <div class="card-grid">
      <!-- Card 1 -->
      <div class="id-card card-blue">
        <div class="accent-top"></div>
        
        <div class="profile-section">
          <div class="profile-image">
            <img src="img/pranto.jpg" alt="Employee photo">
          </div>
          <div class="qr-code" id="qrCode5"><img src="img/qr.png" alt=""></div>
        </div>
        
        <div class="info-section">
          <div>
            <div class="logo"><img src="img/logo.png" width="50px" > City Care Birganj</div>
            <h class="nameof">Jane Doe</h>
            <p class="title">Senior Developer</p>
            
            <div class="details">
              <span class="label">ID:</span>
              <span>EMP-10042</span>
            </div>
            <div class="details">
              <span class="label">Number:</span>
              <span>+88 018-424-94422</span>
            </div>
            <div class="details">
              <span class="label">Email:</span>
              <span>jane.doe@company.com</span>
            </div>
          </div>
          
        </div>
      </div>
      
      <!-- Card 2 -->
      <div class="id-card card-green">
        <div class="accent-top"></div>
        
        <div class="profile-section">
          <div class="profile-image">
            <img src="img/pranto.jpg" alt="Employee photo">
          </div>
          <div class="qr-code" id="qrCode5"><img src="img/qr.png" alt=""></div>
        </div>
        
        <div class="info-section">
          <div>
            <div class="logo"><img src="img/logo.png" width="50px" > City Care Birganj</div>
            <h class="nameof">John Smith</h>
            <p class="title">UX Designer</p>
            
            <div class="details">
              <span class="label">ID:</span>
              <span>EMP-10043</span>
            </div>
            <div class="details">
              <span class="label">Number:</span>
              <span>+88 018-424-94422</span>
            </div>
            <div class="details">
              <span class="label">Email:</span>
              <span>john@company.com</span>
            </div>
          </div>
          
        </div>
      </div>
      
      <!-- Card 3 -->
      <div class="id-card card-purple">
        <div class="accent-top"></div>
        
        <div class="profile-section">
          <div class="profile-image">
            <img src="img/pranto.jpg" alt="Employee photo">
          </div>
          <div class="qr-code" id="qrCode5"><img src="img/qr.png" alt=""></div>
        </div>
        
        <div class="info-section">
          <div>
            <div class="logo"><img src="img/logo.png" width="50px" > City Care Birganj</div>
            <h class="nameof">Sarah Johnson</h>
            <p class="title">Marketing Manager</p>
            
            <div class="details">
              <span class="label">ID:</span>
              <span>EMP-10044</span>
            </div>
            <div class="details">
              <span class="label">Number:</span>
              <span>+88 018-424-94422</span>
            </div>
            <div class="details">
              <span class="label">Email:</span>
              <span>sarah.j@company.com</span>
            </div>
          </div>
          
        </div>
      </div>
      
      <!-- Card 4 -->
      <div class="id-card card-orange">
        <div class="accent-top"></div>
        
        <div class="profile-section">
          <div class="profile-image">
            <img src="img/pranto.jpg" alt="Employee photo">
          </div>
          <div class="qr-code" id="qrCode5"><img src="img/qr.png" alt=""></div>
        </div>
        
        <div class="info-section">
          <div>
            <div class="logo"><img src="img/logo.png" width="50px" > City Care Birganj</div>
            <h class="nameof">Michael Chen</h>
            <p class="title">Product Manager</p>
            
            <div class="details">
              <span class="label">ID:</span>
              <span>EMP-10045</span>
            </div>
            <div class="details">
              <span class="label">Number:</span>
              <span>+88 018-424-94422</span>
            </div>
            <div class="details">
              <span class="label">Email:</span>
              <span>michael.c@company.com</span>
            </div>
          </div>
          

        </div>
      </div>
      
      <!-- Card 5 -->
      <div class="id-card card-red">
        <div class="accent-top"></div>
        
        <div class="profile-section">
          <div class="profile-image">
            <img src="img/pranto.jpg" alt="Employee photo">
          </div>
          <div class="qr-code" id="qrCode5"><img src="img/qr.png" alt=""></div>
        </div>
        
        <div class="info-section">
          <div>
            <div class="logo"><img src="img/logo.png" width="50px" > City Care Birganj</div>
            <h class="nameof">Emma Wilson</h>
            <p class="title">HR Director</p>
            
            <div class="details">
              <span class="label">ID:</span>
              <span>EMP-10046</span>
            </div>
            <div class="details">
              <span class="label">Number:</span>
              <span>+88 018-424-94422</span>
            </div>
            <div class="details">
              <span class="label">Email:</span>
              <span>emma.w@company.com</span>
            </div>
          </div>
          

        </div>
      </div>
    </div>
  </div>

</body>
</html>
<br><br><br><br><br>