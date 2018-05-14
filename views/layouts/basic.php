<?php
use app\assets\MainAsset;
use yii\helpers\html;

MainAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<meta charset="<?= Yii::$app->charset ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
	<div class="menu-header">
		<div class="menu-header-top-in">
			<div class="menu-header-top-in-list">
				<div class="menu-header-top-in-list-btn">YouTube</div>
				<div class="menu-header-top-in-list-btn">Facebook</div>
				<div class="menu-header-top-in-list-btn">Twitter</div>
				<div class="menu-header-top-in-list-btn">LinkedIn</div>
				<div class="menu-header-top-in-list-btn">LiveJournal</div>
				<div class="menu-header-top-in-list-btn">Google+</div>
			</div>
		</div>
		<div class="menu-header-in">
			<a class="menu-header-in-left">
				<div class="menu-header-in-left-icon"></div>
				<div class="menu-header-in-left-title"><span class="menu-header-in-left-title-in">it</span>pings</div>
			</a>
			<div class="menu-header-in-right">
				
				<div class="menu-header-in-right-search">
					<input type="text" class="menu-header-in-right-search-in" placeholder="search">
				</div>
				<div class="menu-header-in-right-list">
					<button class="menu-header-in-right-list-btn btn btn-primary">Sign In</button>
					<button class="menu-header-in-right-list-btn btn btn-success">Sign Up</button>
				</div>
			</div>
			<div class="menu-header-in-center">
				<div class="menu-header-in-center-list">
					
					<button class="menu-header-in-center-list-btn">Articles<div class="menu-header-in-center-list-btn-icon"></div>
						<div class="menu-list">
							<div class="menu-list-in">
								<div class="menu-list-in-main">
									<div class="menu-list-in-main-item">
										<div class="menu-list-in-main-item-title">OS</div>
										<div class="menu-list-in-main-item-option">Linux</div>
										<div class="menu-list-in-main-item-option">BSD</div>
										<div class="menu-list-in-main-item-option">Unix</div>
									</div>
									<div class="menu-list-in-main-item">
										<div class="menu-list-in-main-item-title">Programming</div>
										<div class="menu-list-in-main-item-option">Python</div>
										<div class="menu-list-in-main-item-option">PHP</div>
										<div class="menu-list-in-main-item-option">MySQL</div>
										<div class="menu-list-in-main-item-option">Tools</div>
									</div>
									<div class="menu-list-in-main-item">
										<div class="menu-list-in-main-item-title">Networking</div>
										<div class="menu-list-in-main-item-option">Cisco</div>
										<div class="menu-list-in-main-item-option">IDS</div>
										<div class="menu-list-in-main-item-option">LAN</div>
										<div class="menu-list-in-main-item-option">VPN</div>
										<div class="menu-list-in-main-item-option">WAN</div>
									</div>
									<div class="menu-list-in-main-item">
										<div class="menu-list-in-main-item-title">Hardware</div>
										<div class="menu-list-in-main-item-option">Configuration</div>
										<div class="menu-list-in-main-item-option">Development</div>
										<div class="menu-list-in-main-item-option">Secuirty</div>
										<div class="menu-list-in-main-item-option">Troubleshooting</div>
										<div class="menu-list-in-main-item-option">Usage</div>
									</div>
									<div class="menu-list-in-main-item">
										<div class="menu-list-in-main-item-title">Other</div>
										<div class="menu-list-in-main-item-option">Gaming</div>
										<div class="menu-list-in-main-item-option">Multimedia</div>	
									</div>
								</div>
							</div>
						</div>
					</button>
					<button class="menu-header-in-center-list-btn">Online cources<div class="menu-header-in-center-list-btn-icon"></div>
						<div class="menu-list">
							<div class="menu-list-in menu-list-in-last">
								<div class="menu-list-in-main">
									<div class="menu-list-in-main-item menu-list-in-main-item-last">
										<div class="menu-list-in-main-item-title">Linux</div>
										<div class="menu-list-in-main-item-option">Linux Zero To Hero Project</div>
										<div class="menu-list-in-main-item-option">Secuirty</div>
										<div class="menu-list-in-main-item-option">Web</div>
									</div>
									<div class="menu-list-in-main-item menu-list-in-main-item-last">
										<div class="menu-list-in-main-item-title">Troubleshooting</div>
										<div class="menu-list-in-main-item-option">Linux Troubleshooting</div>
										<div class="menu-list-in-main-item-option">PHP</div>
										<div class="menu-list-in-main-item-option">MySQL</div>
										<div class="menu-list-in-main-item-option">Tools</div>
									</div>
									<div class="menu-list-in-main-item menu-list-in-main-item-last">
										<div class="menu-list-in-main-item-title">Networking</div>
										<div class="menu-list-in-main-item-option">Cisco</div>
										<div class="menu-list-in-main-item-option">IDS</div>
										<div class="menu-list-in-main-item-option">LAN</div>
										<div class="menu-list-in-main-item-option">VPN</div>
										<div class="menu-list-in-main-item-option">WAN</div>
									</div>
								</div>
							</div>
						</div>
					</button>
					<button class="menu-header-in-center-list-btn">Videos<div class="menu-header-in-center-list-btn-icon"></div></button>
					<button class="menu-header-in-center-list-btn">About</button>
				</div>
			</div>
			
		</div>
	</div>
<?php $this->beginBody() ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-6">
				
			</div>
			<div class="col-sm-6">
				
			</div>
		</div>
		<button class="btn btn-primary">Success</button>
		<div class="row">
			<div></div>
			
			<div class="col-sm-3 col-md-4 display">SM 3</div><div class="col-sm-6 col-md-4 display">SM 6</div><div class="col-sm-3 col-md-4 display">SM 3</div>
		</div>
	
	</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>