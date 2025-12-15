@include('admin/header')

<style>
  @keyframes fadeInUp {
    from {
      opacity: 0;
      transform: translateY(30px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  @keyframes slideInRight {
    from {
      opacity: 0;
      transform: translateX(50px);
    }
    to {
      opacity: 1;
      transform: translateX(0);
    }
  }

  @keyframes pulse {
    0%, 100% {
      transform: scale(1);
    }
    50% {
      transform: scale(1.05);
    }
  }

  @keyframes shimmer {
    0% {
      background-position: -1000px 0;
    }
    100% {
      background-position: 1000px 0;
    }
  }

  .animated-card {
    animation: fadeInUp 0.6s ease-out;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .animated-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
  }

  .card-primary-gradient {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border: none;
  }

  .info-card {
    animation: slideInRight 0.8s ease-out;
    background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
    border: none;
    color: white;
  }

  .stats-item {
    transition: all 0.3s ease;
    cursor: pointer;
    border-left: 4px solid transparent;
    text-decoration: none;
    display: block;
  }

  .stats-item:hover {
    background: linear-gradient(90deg, rgba(255, 255, 255, 0.4) 0%, rgba(255, 255, 255, 0.2) 100%);
    border-left-color: #fff;
    transform: translateX(8px) scale(1.02);
  }

  .stats-item:active {
    transform: translateX(8px) scale(0.98);
  }

  .stats-badge {
    background: rgba(255, 255, 255, 0.3);
    padding: 5px 12px;
    border-radius: 20px;
    font-weight: bold;
    display: inline-block;
    animation: pulse 2s infinite;
  }

  .shimmer-header {
    background: linear-gradient(90deg, #667eea 0%, #764ba2 50%, #667eea 100%);
    background-size: 200% 100%;
    animation: shimmer 3s linear infinite;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    font-weight: bold;
  }

  .info-row {
    padding: 12px;
    margin: 8px 0;
    background: rgba(255, 255, 255, 0.05);
    border-radius: 8px;
    border-left: 3px solid #667eea;
    transition: all 0.3s ease;
  }

  .info-row:hover {
    background: rgba(255, 255, 255, 0.1);
    transform: translateX(5px);
  }

  .icon-box {
    width: 40px;
    height: 40px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background: rgba(102, 126, 234, 0.2);
    border-radius: 10px;
    margin-right: 15px;
    transition: all 0.3s ease;
  }

  .info-row:hover .icon-box {
    background: rgba(102, 126, 234, 0.4);
    transform: rotate(360deg);
  }

  .breadcrumb-modern {
    background: transparent;
    animation: fadeInUp 0.4s ease-out;
  }

  .breadcrumb-modern .breadcrumb-item a {
    color: #667eea;
    text-decoration: none;
    transition: all 0.3s ease;
  }

  .breadcrumb-modern .breadcrumb-item a:hover {
    color: #764ba2;
    transform: scale(1.05);
    display: inline-block;
  }

  .card-body-white {
    background: white;
    border-radius: 10px;
  }

  .summary-title {
    color: white;
    font-weight: bold;
    margin-bottom: 20px;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
  }
</style>

<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="shimmer-header">Tentang Rutan Situbondo</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right breadcrumb-modern">
            <li class="breadcrumb-item"><a href="/admin/tentang-rutan"><i class="fas fa-home"></i> Home</a></li>
            <li class="breadcrumb-item active">Tentang Rutan</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8">
          <div class="card animated-card" style="animation-delay: 0.1s;">
            <div class="card-header card-primary-gradient">
              <h3 class="card-title" style="color: white; font-weight: bold;">
                <i class="fas fa-building"></i> Informasi Rutan
              </h3>
            </div>
            <div class="card-body card-body-white">
              <h4 style="color: #667eea; font-weight: bold; margin-bottom: 20px;">
                <i class="fas fa-landmark"></i> {{ $rutan_info['name'] }}
              </h4>
              
              <div style="padding: 15px; background: linear-gradient(135deg, rgba(102, 126, 234, 0.05) 0%, rgba(118, 75, 162, 0.05) 100%); border-radius: 10px; margin-bottom: 20px;">
                <p style="line-height: 1.8; color: #333;">{{ $rutan_info['description'] }}</p>
              </div>

              <div class="info-row">
                <div class="icon-box">
                  <i class="fas fa-map-marker-alt" style="color: #667eea;"></i>
                </div>
                <strong style="color: #667eea;">Alamat:</strong>
                <span style="color: #555;">{{ $rutan_info['address'] }}</span>
              </div>

              <div class="info-row">
                <div class="icon-box">
                  <i class="fas fa-phone" style="color: #667eea;"></i>
                </div>
                <strong style="color: #667eea;">Telepon:</strong>
                <span style="color: #555;">{{ $rutan_info['phone'] }}</span>
              </div>

              <div class="info-row">
                <div class="icon-box">
                  <i class="fas fa-envelope" style="color: #667eea;"></i>
                </div>
                <strong style="color: #667eea;">Email:</strong>
                <span style="color: #555;">{{ $rutan_info['email'] }}</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card animated-card info-card" style="animation-delay: 0.3s;">
            <div class="card-body">
              <h5 class="summary-title">
                <i class="fas fa-chart-pie"></i> Ringkasan Data
              </h5>
              <ul class="list-group" style="background: transparent; border: none;">
                <a href="/admin/view-slider" class="stats-item" style="background: rgba(255,255,255,0.2); border: none; color: white; margin-bottom: 10px; border-radius: 8px; padding: 12px 20px;">
                  <i class="fas fa-images" style="margin-right: 10px;"></i>
                  <strong>Slider</strong>
                  <span class="stats-badge float-right">{{ $slider }}</span>
                </a>
                
                <a href="/admin/view-blogs" class="stats-item" style="background: rgba(255,255,255,0.2); border: none; color: white; margin-bottom: 10px; border-radius: 8px; padding: 12px 20px;">
                  <i class="fas fa-blog" style="margin-right: 10px;"></i>
                  <strong>Berita</strong>
                  <span class="stats-badge float-right">{{ $blog }}</span>
                </a>
                <a href="/admin/view-photos" class="stats-item" style="background: rgba(255,255,255,0.2); border: none; color: white; margin-bottom: 10px; border-radius: 8px; padding: 12px 20px;">
                  <i class="fas fa-camera" style="margin-right: 10px;"></i>
                  <strong>Dokumentasi</strong>
                  <span class="stats-badge float-right">{{ $photos }}</span>
                </a>   
                <a href="/admin/view-lkjip" class="stats-item" style="background: rgba(255,255,255,0.2); border: none; color: white; margin-bottom: 10px; border-radius: 8px; padding: 12px 20px;">
                  <i class="fas fa-envelope-open-text" style="margin-right: 10px;"></i>
                  <strong>LKJIP</strong>
                  <span class="stats-badge float-right">{{ $lkjip }}</span>
                <a href="/admin/view-contacts" class="stats-item" style="background: rgba(255,255,255,0.2); border: none; color: white; margin-bottom: 10px; border-radius: 8px; padding: 12px 20px;">
                  <i class="fas fa-envelope-open-text" style="margin-right: 10px;"></i>
                  <strong>Contacts</strong>
                  <span class="stats-badge float-right">{{ $contact_us }}</span>
                </a>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

@include('admin/footer')

@include('admin/scripts')