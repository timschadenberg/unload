<?php defined('_JEXEC') or die;?>
<?php
// Disables Joomla Generator tag
JFactory::getDocument()->setGenerator('');

// Loads the document in a variable
$doc = JFactory::getDocument();
$articleid = JRequest::getInt('id', 0);

?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8" />    
    <link rel="dns-prefetch" href="//cdnjs.cloudflare.com" />
    <link rel="dns-prefetch" href="//ajax.googleapis.com" />
    <link rel="dns-prefetch" href="//fonts.googleapis.com" />
    <link rel="dns-prefetch" href="//www.google-analytics.com" />
    <title><?php echo $doc->getTitle();?></title>   
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php $canonicalLink =  rtrim("http://".$_SERVER['HTTP_HOST'].$_SERVER["REQUEST_URI"], "/");?>
    <link rel="canonical" href="<?php echo($canonicalLink); ?>" />
    <meta name="robots" content="index, follow" />     
    <meta name="description" content="<?php $metadesc = $doc->getMetaData('description'); echo $metadesc;?>" />
    <meta name="keywords" content="<?php $metakeyw = $doc->getMetaData('keywords'); echo $metakeyw;?>" />    
    
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/3.0.2/css/font-awesome.min.css" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.0/css/bootstrap.no-icons.min.css" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/normalize.css" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/style.css" />
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Terminal+Dosis+Light" />
        
    <!--[if lte IE 9]>
        <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
    <![endif]-->
        
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    
    <?php if($articleid == 4): ?>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/happy.js"></script>
    <script>
      $(document).ready(function () {
        $('#contactme').isHappy({
          fields: {
            '#input1': {
                required: true,
                message: '!'
            },
            '#input2': {
                required: true,
                message: '!',
                test: happy.email
            },
            '#input3': {
                required: true,
                message: 'Het bericht is leeg en kan niet verstuurd worden. Probeer het opnieuw.'
            }
          }
        });
      }); 
    </script>
    <?php endif; ?>
    
    <script>    
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-19380901-1']);
      _gaq.push(['_trackPageview']);
    
      (function() {
        var ga = document.createElement('script'); ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();    
    </script>
    
</head>
<body>
    
    <jdoc:include type="modules" name="breadcrumbs" style="raw" />
    <jdoc:include type="modules" name="featured" style="raw" />
    <jdoc:include type="modules" name="sidebar" style="raw" />
    <jdoc:include type="modules" name="widget1" style="raw" />
    <jdoc:include type="modules" name="widget2" style="raw" />
    <jdoc:include type="modules" name="widget3" style="raw" />
    <jdoc:include type="modules" name="footer" style="raw" />
    
    
    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="span2">
                    <a href="/"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/tim.jpg" alt="profielfoto Tim Schadenberg" class="profiel" /></a>
                </div>
                <div class="span9">
                    <h1>Tim Schadenberg</h1>
                    <h2>Informatieprofessional</h2>
                    <hr />
                    <ul class="moreinfo">
                        <li><a href="/files/CV.pdf" target="_blank"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/pdf-icon.png" alt="Curriculum Vitae" /><span>CV</span></a></li>
                        <li><a href="/files/timschadenberg.vcf"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/vcard.png" alt="Vcard Tim" /><span>vcard</span></a></li>
                        <li><i class="icon-envelope-alt"></i><span>tim.schadenberg&#064;&#103;&#109;&#097;&#105;&#108;&#046;com</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    
     <!-- Wrapper -->
    <div class="container">
        
    <!-- Navigation -->
    <nav>
        <div class="menubar">
            <jdoc:include type="modules" name="navigation" style="raw"/>
        </div>
    </nav>

       
    <!-- Content -->
    <div id="content">
        <jdoc:include type="component" />
    </div>

    </div>
        
    <!-- Footer -->
    <footer>
        <div class="container footercopy">
            <span>&copy; Tim Schadenberg 2013</span>
        </div>
    </footer>
</body>
</html>