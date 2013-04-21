<?php

/* CineminoSiteBundle:Test:template.html.twig */
class __TwigTemplate_cea3d67a314dd4cdb2e3ca615a23cf4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'info' => array($this, 'block_info'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"Shades of gunmetal gray.\">
    <meta name=\"author\" content=\"Thomas Park\">

    <!--[if lt IE 9]>
      <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->

    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/css/bootswatch.css\" rel=\"stylesheet"), "html", null, true);
        echo "\">

  </head>

  <body class=\"preview\" data-spy=\"scroll\" data-target=\".subnav\" data-offset=\"80\">


<!-- Navbar
================================================== -->
<section id=\"navbar\">
  <div class=\"page-header\">
    <h1>Cinémino</h1>
  </div>
  <div class=\"navbar navbar-inverse\">
    <div class=\"navbar-inner\">
      <div class=\"container\" style=\"width: auto;\">
        <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </a>
        <a class=\"brand\" href=\"#\">Panel Admin</a>
        <div class=\"nav-collapse\">
          <ul class=\"nav\">
            <li class=\"active\"><a href=\"#\">Accueil</a></li>
            <li><a href=\"#\">Ajouter / Modifier une séance</a></li>
             <li><a href=\"#\">Evènements</a></li>
             <li><a href=\"#\">Gérer les intervenants</a></li>
            <li><a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cinema"), "html", null, true);
        echo "\">Gérer les cinémas</a></li>
            <li><a href=\"#\">Administration des utilisateurs</a></li>>
          </ul>
          <form class=\"navbar-search pull-left\" action=\"\">
            <input type=\"text\" class=\"search-query span2\" placeholder=\"Search\">
          </form>
          <ul class=\"nav pull-right\">
            <li><a href=\"#\">Accéder au site</a></li>
            <li class=\"divider-vertical\"></li>
            <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> Admin <b class=\"caret\"></b></a>
              <ul class=\"dropdown-menu\">
                <li><a href=\"#\">Modifier Profil</a></li>
                <li class=\"divider\"></li>
                <li>   <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html", null, true);
        echo "\">
                    ";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Déconnexion", array(), "FOSUserBundle"), "html", null, true);
        echo "
                </a>
                </li>
              </ul>
            </li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div>
    </div><!-- /navbar-inner -->
  </div><!-- /navbar -->

</section>

    <div class=\"container\">

<section id =\"information\">
    
   ";
        // line 76
        $this->displayBlock('info', $context, $blocks);
        // line 77
        echo "    

   
";
        // line 80
        $this->displayBlock('javascripts', $context, $blocks);
        echo "    
    
</section>
   


<!-- Typography
================================================== -->
<section id=\"typography\">

   
    
  <!-- Headings & Paragraph Copy -->
  <div class=\"row\">

    <div class=\"span4\">
      <div class=\"well\">
        <h1>h1. Heading 1</h1>
        <h2>h2. Heading 2</h2>
        <h3>h3. Heading 3</h3>
        <h4>h4. Heading 4</h4>
        <h5>h5. Heading 5</h5>
        <h6>h6. Heading 6</h6>
      </div>
    </div>

    <div class=\"span4\">
      <h3>Example body text</h3>
      <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
      <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec sed odio dui.</p>
    </div>

    <div class=\"span4\">
      <h3>Example addresses</h3>
      <address>
        <strong>Twitter, Inc.</strong><br>
        795 Folsom Ave, Suite 600<br>
        San Francisco, CA 94107<br>
        <abbr title=\"Phone\">P:</abbr> (123) 456-7890
      </address>
      <address>
        <strong>Full Name</strong><br>
        <a href=\"mailto:#\">first.last@gmail.com</a>
      </address>
    </div>

  </div>
  
  <div class=\"row\">
    <div class=\"span6\">
      <blockquote>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
        <small>Someone famous in <cite title=\"Source Title\">Source Title</cite></small>
      </blockquote>
    </div>
    <div class=\"span6\">
      <blockquote class=\"pull-right\">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
        <small>Someone famous in <cite title=\"Source Title\">Source Title</cite></small>
      </blockquote>
    </div>
  </div>

</section>



<!-- Buttons
================================================== -->
<section id=\"buttons\">
  <div class=\"page-header\">
    <h1>Buttons</h1>
  </div>
  <table class=\"table table-bordered table-striped\">
    <thead>
      <tr>
        <th>Button</th>
        <th>Large Button</th>
        <th>Small Button</th>
        <th>Disabled Button</th>
    <th>Button with Icon</th>
    <th>Split Button</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><a class=\"btn\" href=\"#\">Default</a></td>
        <td><a class=\"btn btn-large\" href=\"#\">Default</a></td>
        <td><a class=\"btn btn-small\" href=\"#\">Default</a></td>
        <td><a class=\"btn disabled\" href=\"#\">Default</a></td>
        <td><a class=\"btn\" href=\"#\"><i class=\"icon-cog\"></i> Default</a></td>
    <td>
          <div class=\"btn-group\">
            <a class=\"btn\" href=\"#\">Default</a>
            <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"><span class=\"caret\"></span></a>
            <ul class=\"dropdown-menu\">
              <li><a href=\"#\">Action</a></li>
              <li><a href=\"#\">Another action</a></li>
              <li><a href=\"#\">Something else here</a></li>
              <li class=\"divider\"></li>
              <li><a href=\"#\">Separated link</a></li>
            </ul>
          </div><!-- /btn-group -->
    </td>
      </tr>
      <tr>
        <td><a class=\"btn btn-primary\" href=\"#\">Primary</a></td>
        <td><a class=\"btn btn-primary btn-large\" href=\"#\">Primary</a></td>
        <td><a class=\"btn btn-primary btn-small\" href=\"#\">Primary</a></td>
        <td><a class=\"btn btn-primary disabled\" href=\"#\">Primary</a></td>
        <td><a class=\"btn btn-primary\" href=\"#\"><i class=\"icon-shopping-cart icon-white\"></i> Primary</a></td>
    <td>
          <div class=\"btn-group\">
            <a class=\"btn btn-primary\" href=\"#\">Primary</a>
            <a class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"><span class=\"caret\"></span></a>
            <ul class=\"dropdown-menu\">
              <li><a href=\"#\">Action</a></li>
              <li><a href=\"#\">Another action</a></li>
              <li><a href=\"#\">Something else here</a></li>
              <li class=\"divider\"></li>
              <li><a href=\"#\">Separated link</a></li>
            </ul>
          </div><!-- /btn-group -->
    </td>
      </tr>
      <tr>
        <td><a class=\"btn btn-info\" href=\"#\">Info</a></td>
        <td><a class=\"btn btn-info btn-large\" href=\"#\">Info</a></td>
        <td><a class=\"btn btn-info btn-small\" href=\"#\">Info</a></td>
        <td><a class=\"btn btn-info disabled\" href=\"#\">Info</a></td>
        <td><a class=\"btn btn-info\" href=\"#\"><i class=\"icon-exclamation-sign icon-white\"></i> Info</a></td>
    <td>
          <div class=\"btn-group\">
            <a class=\"btn btn-info\" href=\"#\">Info</a>
            <a class=\"btn btn-info dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"><span class=\"caret\"></span></a>
            <ul class=\"dropdown-menu\">
              <li><a href=\"#\">Action</a></li>
              <li><a href=\"#\">Another action</a></li>
              <li><a href=\"#\">Something else here</a></li>
              <li class=\"divider\"></li>
              <li><a href=\"#\">Separated link</a></li>
            </ul>
          </div><!-- /btn-group -->
    </td>
      </tr>
      <tr>
        <td><a class=\"btn btn-success\" href=\"#\">Success</a></td>
        <td><a class=\"btn btn-success btn-large\" href=\"#\">Success</a></td>
        <td><a class=\"btn btn-success btn-small\" href=\"#\">Success</a></td>
        <td><a class=\"btn btn-success disabled\" href=\"#\">Success</a></td>
        <td><a class=\"btn btn-success\" href=\"#\"><i class=\"icon-ok icon-white\"></i> Success</a></td>
    <td>
          <div class=\"btn-group\">
            <a class=\"btn btn-success\" href=\"#\">Success</a>
            <a class=\"btn btn-success dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"><span class=\"caret\"></span></a>
            <ul class=\"dropdown-menu\">
              <li><a href=\"#\">Action</a></li>
              <li><a href=\"#\">Another action</a></li>
              <li><a href=\"#\">Something else here</a></li>
              <li class=\"divider\"></li>
              <li><a href=\"#\">Separated link</a></li>
            </ul>
          </div><!-- /btn-group -->
    </td>
      </tr>
      <tr>
        <td><a class=\"btn btn-warning\" href=\"#\">Warning</a></td>
        <td><a class=\"btn btn-warning btn-large\" href=\"#\">Warning</a></td>
        <td><a class=\"btn btn-warning btn-small\" href=\"#\">Warning</a></td>
        <td><a class=\"btn btn-warning disabled\" href=\"#\">Warning</a></td>
        <td><a class=\"btn btn-warning\" href=\"#\"><i class=\"icon-warning-sign icon-white\"></i> Warning</a></td>
    <td>
          <div class=\"btn-group\">
            <a class=\"btn btn-warning\" href=\"#\">Warning</a>
            <a class=\"btn btn-warning dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"><span class=\"caret\"></span></a>
            <ul class=\"dropdown-menu\">
              <li><a href=\"#\">Action</a></li>
              <li><a href=\"#\">Another action</a></li>
              <li><a href=\"#\">Something else here</a></li>
              <li class=\"divider\"></li>
              <li><a href=\"#\">Separated link</a></li>
            </ul>
          </div><!-- /btn-group -->
    </td>
      </tr>
      <tr>
        <td><a class=\"btn btn-danger\" href=\"#\">Danger</a></td>
        <td><a class=\"btn btn-danger btn-large\" href=\"#\">Danger</a></td>
        <td><a class=\"btn btn-danger btn-small\" href=\"#\">Danger</a></td>
        <td><a class=\"btn btn-danger disabled\" href=\"#\">Danger</a></td>
        <td><a class=\"btn btn-danger\" href=\"#\"><i class=\"icon-remove icon-white\"></i> Danger</a></td>
    <td>
          <div class=\"btn-group\">
            <a class=\"btn btn-danger\" href=\"#\">Danger</a>
            <a class=\"btn btn-danger dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"><span class=\"caret\"></span></a>
            <ul class=\"dropdown-menu\">
              <li><a href=\"#\">Action</a></li>
              <li><a href=\"#\">Another action</a></li>
              <li><a href=\"#\">Something else here</a></li>
              <li class=\"divider\"></li>
              <li><a href=\"#\">Separated link</a></li>
            </ul>
          </div><!-- /btn-group -->
    </td>
      </tr>
      <tr>
        <td><a class=\"btn btn-inverse\" href=\"#\">Inverse</a></td>
        <td><a class=\"btn btn-inverse btn-large\" href=\"#\">Inverse</a></td>
        <td><a class=\"btn btn-inverse btn-small\" href=\"#\">Inverse</a></td>
        <td><a class=\"btn btn-inverse disabled\" href=\"#\">Inverse</a></td>
        <td><a class=\"btn btn-inverse\" href=\"#\"><i class=\"icon-random icon-white\"></i> Inverse</a></td>
    <td>
          <div class=\"btn-group\">
            <a class=\"btn btn-inverse\" href=\"#\">Inverse</a>
            <a class=\"btn btn-inverse dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"><span class=\"caret\"></span></a>
            <ul class=\"dropdown-menu\">
              <li><a href=\"#\">Action</a></li>
              <li><a href=\"#\">Another action</a></li>
              <li><a href=\"#\">Something else here</a></li>
              <li class=\"divider\"></li>
              <li><a href=\"#\">Separated link</a></li>
            </ul>
          </div><!-- /btn-group -->
    </td>
      </tr>
    </tbody>
  </table>

</section>


<!-- Forms
================================================== -->
<section id=\"forms\">
  <div class=\"page-header\">
    <h1>Forms</h1>
  </div>

  <div class=\"row\">
    <div class=\"span10 offset1\">

      <form class=\"well form-search\">
        <input type=\"text\" class=\"input-medium search-query\">
        <button type=\"submit\" class=\"btn\">Search</button>
      </form>

        <form class=\"well form-search\">
          <input type=\"text\" class=\"input-small\" placeholder=\"Email\">
          <input type=\"password\" class=\"input-small\" placeholder=\"Password\">
          <button type=\"submit\" class=\"btn\">Go</button>
        </form>


      <form class=\"form-horizontal well\">
        <fieldset>
          <legend>Controls Bootstrap supports</legend>
          <div class=\"control-group\">
            <label class=\"control-label\" for=\"input01\">Text input</label>
            <div class=\"controls\">
              <input type=\"text\" class=\"input-xlarge\" id=\"input01\">
              <p class=\"help-block\">In addition to freeform text, any HTML5 text-based input appears like so.</p>
            </div>
          </div>
          <div class=\"control-group\">
            <label class=\"control-label\" for=\"optionsCheckbox\">Checkbox</label>
            <div class=\"controls\">
              <label class=\"checkbox\">
                <input type=\"checkbox\" id=\"optionsCheckbox\" value=\"option1\">
                Option one is this and that&mdash;be sure to include why it's great
              </label>
            </div>
          </div>
          <div class=\"control-group\">
            <label class=\"control-label\" for=\"select01\">Select list</label>
            <div class=\"controls\">
              <select id=\"select01\">
                <option>something</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
          </div>
          <div class=\"control-group\">
            <label class=\"control-label\" for=\"multiSelect\">Multicon-select</label>
            <div class=\"controls\">
              <select multiple=\"multiple\" id=\"multiSelect\">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
          </div>
          <div class=\"control-group\">
            <label class=\"control-label\" for=\"fileInput\">File input</label>
            <div class=\"controls\">
              <input class=\"input-file\" id=\"fileInput\" type=\"file\">
            </div>
          </div>
          <div class=\"control-group\">
            <label class=\"control-label\" for=\"textarea\">Textarea</label>
            <div class=\"controls\">
              <textarea class=\"input-xlarge\" id=\"textarea\" rows=\"3\"></textarea>
            </div>
          </div>
          <div class=\"control-group\">
            <label class=\"control-label\" for=\"focusedInput\">Focused input</label>
            <div class=\"controls\">
              <input class=\"input-xlarge focused\" id=\"focusedInput\" type=\"text\" value=\"This is focused…\">
            </div>
          </div>
          <div class=\"control-group\">
            <label class=\"control-label\">Uneditable input</label>
            <div class=\"controls\">
              <span class=\"input-xlarge uneditable-input\">Some value here</span>
            </div>
          </div>
          <div class=\"control-group\">
            <label class=\"control-label\" for=\"disabledInput\">Disabled input</label>
            <div class=\"controls\">
              <input class=\"input-xlarge disabled\" id=\"disabledInput\" type=\"text\" placeholder=\"Disabled input here…\" disabled>
            </div>
          </div>
          <div class=\"control-group\">
            <label class=\"control-label\" for=\"optionsCheckbox2\">Disabled checkbox</label>
            <div class=\"controls\">
              <label class=\"checkbox\">
                <input type=\"checkbox\" id=\"optionsCheckbox2\" value=\"option1\" disabled>
                This is a disabled checkbox
              </label>
            </div>
          </div>
          <div class=\"control-group warning\">
            <label class=\"control-label\" for=\"inputWarning\">Input with warning</label>
            <div class=\"controls\">
              <input type=\"text\" id=\"inputWarning\">
              <span class=\"help-inline\">Something may have gone wrong</span>
            </div>
          </div>
          <div class=\"control-group error\">
            <label class=\"control-label\" for=\"inputError\">Input with error</label>
            <div class=\"controls\">
              <input type=\"text\" id=\"inputError\">
              <span class=\"help-inline\">Please correct the error</span>
            </div>
          </div>
          <div class=\"control-group success\">
            <label class=\"control-label\" for=\"inputSuccess\">Input with success</label>
            <div class=\"controls\">
              <input type=\"text\" id=\"inputSuccess\">
              <span class=\"help-inline\">Woohoo!</span>
            </div>
          </div>
          <div class=\"control-group success\">
            <label class=\"control-label\" for=\"selectError\">Select with success</label>
            <div class=\"controls\">
              <select id=\"selectError\">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
              <span class=\"help-inline\">Woohoo!</span>
            </div>
          </div>
          <div class=\"form-actions\">
            <button type=\"submit\" class=\"btn btn-primary\">Save changes</button>
            <button type=\"reset\" class=\"btn\">Cancel</button>
          </div>
        </fieldset>
      </form>
    </div>
  </div>

</section>

<!-- Tables
================================================== -->
<section id=\"tables\">
  <div class=\"page-header\">
    <h1>Tables</h1>
  </div>
  
  <table class=\"table table-bordered table-striped table-hover\">
    <thead>
      <tr>
        <th>#</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Username</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <td>3</td>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody>
  </table>
</section>


<!-- Miscellaneous
================================================== -->
<section id=\"miscellaneous\">
  <div class=\"page-header\">
    <h1>Miscellaneous</h1>
  </div>

  <div class=\"row\">
    <div class=\"span4\">

      <h3 id=\"breadcrumbs\">Breadcrumbs</h3>
      <ul class=\"breadcrumb\">
        <li class=\"active\">Home</li>
      </ul>
      <ul class=\"breadcrumb\">
        <li><a href=\"#\">Home</a> <span class=\"divider\">/</span></li>
        <li><a href=\"#\">Library</a> <span class=\"divider\">/</span></li>
        <li class=\"active\">Data</li>
      </ul>
    </div>
    <div class=\"span4\">
      <h3 id=\"pagination\">Pagination</h3>
      <div class=\"pagination\">
        <ul>
          <li><a href=\"#\">&larr;</a></li>
          <li class=\"active\"><a href=\"#\">10</a></li>
          <li class=\"disabled\"><a href=\"#\">...</a></li>
          <li><a href=\"#\">20</a></li>
          <li><a href=\"#\">&rarr;</a></li>
        </ul>
      </div>
      <div class=\"pagination pagination-centered\">
        <ul>
          <li class=\"active\"><a href=\"#\">1</a></li>
          <li><a href=\"#\">2</a></li>
          <li><a href=\"#\">3</a></li>
          <li><a href=\"#\">4</a></li>
          <li><a href=\"#\">5</a></li>
        </ul>
      </div>
    </div>
    
    <div class=\"span4\">
      <h3 id=\"pager\">Pagers</h3>
        
        <ul class=\"pager\">
          <li><a href=\"#\">Previous</a></li>
          <li><a href=\"#\">Next</a></li>
        </ul>
        
        <ul class=\"pager\">
          <li class=\"previous disabled\"><a href=\"#\">&larr; Older</a></li>
          <li class=\"next\"><a href=\"#\">Newer &rarr;</a></li>
        </ul>
    </div>
  </div>


  <!-- Navs
  ================================================== -->

  <div class=\"row\">
    <div class=\"span4\">

      <h3 id=\"tabs\">Tabs</h3>
      <ul class=\"nav nav-tabs\">
        <li class=\"active\"><a href=\"#A\" data-toggle=\"tab\">Section 1</a></li>
        <li><a href=\"#B\" data-toggle=\"tab\">Section 2</a></li>
        <li><a href=\"#C\" data-toggle=\"tab\">Section 3</a></li>
      </ul>
      <div class=\"tabbable\">
        <div class=\"tab-content\">
          <div class=\"tab-pane active\" id=\"A\">
            <p>I'm in Section A.</p>
          </div>
          <div class=\"tab-pane\" id=\"B\">
            <p>Howdy, I'm in Section B.</p>
          </div>
          <div class=\"tab-pane\" id=\"C\">
            <p>What up girl, this is Section C.</p>
          </div>
        </div>
      </div> <!-- /tabbable -->
      
    </div>
    <div class=\"span4\">
      <h3 id=\"pills\">Pills</h3>
      <ul class=\"nav nav-pills\">
        <li class=\"active\"><a href=\"#\">Home</a></li>
        <li><a href=\"#\">Profile</a></li>
        <li class=\"dropdown\">
          <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Dropdown <b class=\"caret\"></b></a>
          <ul class=\"dropdown-menu\">
            <li><a href=\"#\">Action</a></li>
            <li><a href=\"#\">Another action</a></li>
            <li><a href=\"#\">Something else here</a></li>
            <li class=\"divider\"></li>
            <li><a href=\"#\">Separated link</a></li>
          </ul>
        </li>
        <li class=\"disabled\"><a href=\"#\">Disabled link</a></li>
      </ul>
    </div>
    
    <div class=\"span4\">
      
      <h3 id=\"list\">Lists</h3>
        
      <div class=\"well\" style=\"padding: 8px 0;\">
        <ul class=\"nav nav-list\">
          <li class=\"nav-header\">List header</li>
          <li class=\"active\"><a href=\"#\">Home</a></li>
          <li><a href=\"#\">Library</a></li>
          <li><a href=\"#\">Applications</a></li>
          <li class=\"nav-header\">Another list header</li>
          <li><a href=\"#\">Profile</a></li>
          <li><a href=\"#\">Settings</a></li>
          <li class=\"divider\"></li>
          <li><a href=\"#\">Help</a></li>
        </ul>
      </div>
    </div>
  </div>


<!-- Labels
================================================== -->

  <div class=\"row\">
    <div class=\"span6\">
      <h3 id=\"labels\">Labels</h3>
      <span class=\"label\">Default</span>
      <span class=\"label label-success\">Success</span>
      <span class=\"label label-warning\">Warning</span>
      <span class=\"label label-important\">Important</span>
      <span class=\"label label-info\">Info</span>
      <span class=\"label label-inverse\">Inverse</span>
    </div>
    <div class=\"span6\">
      <h3 id=\"badges\">Badges</h3>
      <span class=\"badge\">Default</span>
      <span class=\"badge badge-success\">Success</span>
      <span class=\"badge badge-warning\">Warning</span>
      <span class=\"badge badge-important\">Important</span>
      <span class=\"badge badge-info\">Info</span>
      <span class=\"badge badge-inverse\">Inverse</span>
    </div>
  </div>
  <br />

<!-- Progress bars
================================================== -->


  <h3 id=\"progressbars\">Progress bars</h3>

  <div class=\"row\">
    <div class=\"span4\">
      <div class=\"progress\">
        <div class=\"bar\" style=\"width: 60%;\"></div>
      </div>
    </div>
    <div class=\"span4\">
      <div class=\"progress progress-info progress-striped\">
        <div class=\"bar\" style=\"width: 20%;\"></div>
      </div>
    </div>
    <div class=\"span4\">
      <div class=\"progress progress-danger progress-striped active\">
        <div class=\"bar\" style=\"width: 45%\"></div>
      </div>
    </div>
  </div>
  <br />


<!-- Alerts & Messages
================================================== -->


  <h3 id=\"alerts\">Alerts</h3>

  <div class=\"row\">
    <div class=\"span12\">
        <div class=\"alert alert-block\">
          <a class=\"close\">&times;</a>
          <h4 class=\"alert-heading\">Alert block</h4>
          <p>Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
        </div>
    </div>
  </div>
  <div class=\"row\">
    <div class=\"span4\">
      <div class=\"alert alert-error\">
        <a class=\"close\">&times;</a>
        <strong>Error</strong> Change a few things up and try submitting again.
      </div>
    </div>
    <div class=\"span4\">
      <div class=\"alert alert-success\">
        <a class=\"close\">&times;</a>
        <strong>Success</strong> You successfully read this important alert message.
      </div>
    </div>
    <div class=\"span4\">
      <div class=\"alert alert-info\">
        <a class=\"close\">&times;</a>
        <strong>Information</strong> This alert needs your attention, but it's not super important.
      </div>
    </div>
  </div>


</section>


     <!-- Footer
      ================================================== -->
      <hr>

      <footer id=\"footer\">
        <p class=\"pull-right\"><a href=\"#\">Back to top</a></p>
        <div class=\"links\">
          <a href=\"http://news.bootswatch.com\" onclick=\"pageTracker._link(this.href); return false;\">Blog</a>
          <a href=\"http://feeds.feedburner.com/bootswatch\">RSS</a>
          <a href=\"https://twitter.com/thomashpark\">Twitter</a>
          <a href=\"https://github.com/thomaspark/bootswatch/\">GitHub</a>
          <a rel=\"tooltip\" href=\"javascript:(function(e,a,g,h,f,c,b,d)%7Bif(!(f%3De.jQuery)%7C%7Cg%3Ef.fn.jquery%7C%7Ch(f))%7Bc%3Da.createElement(%22script%22)%3Bc.type%3D%22text/javascript%22%3Bc.src%3D%22http://ajax.googleapis.com/ajax/libs/jquery/%22%2Bg%2B%22/jquery.min.js%22%3Bc.onload%3Dc.onreadystatechange%3Dfunction()%7Bif(!b%26%26(!(d%3Dthis.readyState)%7C%7Cd%3D%3D%22loaded%22%7C%7Cd%3D%3D%22complete%22))%7Bh((f%3De.jQuery).noConflict(1),b%3D1)%3Bf(c).remove()%7D%7D%3Ba.documentElement.childNodes%5B0%5D.appendChild(c)%7D%7D)(window,document,%221.3.2%22,function(%24,L)%7Bif(%24(%22.bootswatcher%22)%5B0%5D)%7B%24(%22.bootswatcher%22).remove()%7Delse%7Bvar%20%24e%3D%24(%27%3Cselect%20class%3D%22bootswatcher%22%3E%3Coption%3EAmelia%3C/option%3E%3Coption%3ECerulean%3C/option%3E%3Coption%3ECosmo%3C/option%3E%3Coption%3ECyborg%3C/option%3E%3Coption%3EJournal%3C/option%3E%3Coption%3EReadable%3C/option%3E%3Coption%3ESimplex%3C/option%3E%3Coption%3ESlate%3C/option%3E%3Coption%3ESpacelab%3C/option%3E%3Coption%3ESpruce%3C/option%3E%3Coption%3ESuperhero%3C/option%3E%3Coption%3EUnited%3C/option%3E%3C/select%3E%27)%3Bvar%20l%3D1%2BMath.floor(Math.random()*%24e.children().length)%3B%24e.css(%7B%22z-index%22:%2299999%22,position:%22fixed%22,top:%225px%22,right:%225px%22,opacity:%220.5%22%7D).hover(function()%7B%24(this).css(%22opacity%22,%221%22)%7D,function()%7B%24(this).css(%22opacity%22,%220.5%22)%7D).change(function()%7Bif(!%24(%22link.bootswatcher%22)%5B0%5D)%7B%24(%22head%22).append(%27%3Clink%20rel%3D%22stylesheet%22%20class%3D%22bootswatcher%22%3E%27)%7D%24(%22link.bootswatcher%22).attr(%22href%22,%22http://bootswatch.com/%22%2B%24(this).find(%22:selected%22).text().toLowerCase()%2B%22/bootstrap.min.css%22)%7D).find(%22option:nth-child(%22%2Bl%2B%22)%22).attr(%22selected%22,%22selected%22).end().trigger(%22change%22)%3B%24(%22body%22).append(%24e)%7D%3B%7D)%3B\" title=\"Drag to your bookmarks bar\">Bookmarklet</a>
          <a href=\"https://github.com/thomaspark/bootswatch/tree/gh-pages/swatchmaker\">Swatchmaker</a>
          <a href=\"http://news.bootswatch.com/post/22193315172/bootswatch-api\">API</a>
          <a href=\"https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=F22JEM3Q78JC2\">Donate</a>
        </div>
        Made by <a target=\"_blank\" href=\"http://thomaspark.me\" onclick=\"pageTracker._link(this.href); return false;\">Thomas Park</a>. Contact him <a href=\"mailto:hello@thomaspark.me\">hello@thomaspark.me</a>.<br/>
        Code licensed under the <a target=\"_blank\" href=\"http://www.apache.org/licenses/LICENSE-2.0\">Apache License v2.0</a>.<br/>
        Based on <a target=\"_blank\" href=\"http://twitter.github.com/bootstrap/\">Bootstrap</a>. Hosted on <a target=\"_blank\" href=\"http://pages.github.com/\">GitHub</a>. Icons from <a target=\"_blank\" href=\"http://glyphicons.com/\">Glyphicons</a>. Web fonts from <a target=\"_blank\" href=\"http://www.google.com/webfonts\">Google</a>.</p>
      </footer>

    </div><!-- /container -->



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
    <script src=\"";
        // line 745
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 746
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/js/application.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 747
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/js/bootswatch.js"), "html", null, true);
        echo "\"></script>


  </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Cinémino: Panel Admin ";
    }

    // line 76
    public function block_info($context, array $blocks = array())
    {
    }

    // line 80
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "CineminoSiteBundle:Test:template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  824 => 80,  819 => 76,  813 => 5,  803 => 747,  799 => 746,  795 => 745,  113 => 43,  23 => 3,  97 => 39,  129 => 49,  156 => 62,  377 => 188,  358 => 175,  350 => 173,  344 => 170,  330 => 165,  326 => 164,  322 => 163,  296 => 149,  292 => 148,  288 => 147,  278 => 140,  274 => 139,  270 => 138,  249 => 126,  242 => 122,  238 => 121,  192 => 99,  150 => 79,  137 => 50,  343 => 154,  339 => 153,  335 => 152,  329 => 149,  309 => 156,  305 => 155,  290 => 119,  286 => 118,  276 => 114,  272 => 113,  268 => 112,  262 => 109,  258 => 108,  254 => 107,  224 => 92,  220 => 109,  210 => 84,  206 => 104,  202 => 103,  185 => 71,  174 => 66,  166 => 87,  148 => 64,  124 => 43,  56 => 14,  53 => 13,  140 => 56,  134 => 47,  86 => 29,  77 => 27,  264 => 107,  259 => 103,  253 => 127,  245 => 101,  241 => 100,  237 => 99,  233 => 133,  229 => 132,  188 => 98,  158 => 52,  110 => 45,  87 => 27,  117 => 44,  112 => 42,  90 => 29,  69 => 22,  65 => 16,  49 => 11,  99 => 40,  82 => 28,  62 => 20,  40 => 14,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 205,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 187,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 174,  340 => 169,  336 => 168,  321 => 101,  313 => 157,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 117,  277 => 86,  267 => 85,  263 => 84,  257 => 128,  251 => 80,  246 => 78,  240 => 77,  234 => 120,  228 => 93,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 68,  181 => 70,  176 => 85,  170 => 65,  168 => 85,  146 => 61,  142 => 74,  128 => 50,  125 => 63,  107 => 39,  38 => 7,  144 => 51,  141 => 51,  135 => 48,  126 => 48,  109 => 41,  103 => 40,  67 => 18,  61 => 21,  47 => 9,  105 => 38,  93 => 31,  76 => 27,  72 => 20,  68 => 25,  27 => 7,  91 => 35,  84 => 31,  94 => 30,  88 => 31,  79 => 44,  59 => 14,  21 => 2,  44 => 15,  31 => 3,  28 => 5,  225 => 96,  216 => 108,  212 => 107,  205 => 84,  201 => 69,  196 => 104,  194 => 103,  191 => 71,  189 => 68,  186 => 76,  180 => 61,  172 => 90,  159 => 61,  154 => 51,  147 => 49,  132 => 67,  127 => 80,  121 => 41,  118 => 59,  114 => 47,  104 => 51,  100 => 59,  78 => 26,  75 => 33,  71 => 20,  58 => 15,  34 => 4,  26 => 2,  24 => 3,  25 => 3,  19 => 1,  70 => 23,  63 => 19,  46 => 9,  22 => 1,  163 => 75,  155 => 65,  152 => 53,  149 => 67,  145 => 48,  139 => 48,  131 => 47,  123 => 45,  120 => 76,  115 => 43,  106 => 44,  101 => 40,  96 => 58,  83 => 27,  80 => 29,  74 => 27,  66 => 21,  55 => 13,  52 => 12,  50 => 10,  43 => 17,  41 => 7,  37 => 8,  35 => 4,  32 => 3,  29 => 3,  184 => 97,  178 => 71,  171 => 57,  165 => 56,  162 => 85,  157 => 60,  153 => 61,  151 => 53,  143 => 72,  138 => 49,  136 => 54,  133 => 43,  130 => 44,  122 => 77,  119 => 39,  116 => 38,  111 => 55,  108 => 36,  102 => 33,  98 => 33,  95 => 38,  92 => 30,  89 => 31,  85 => 28,  81 => 29,  73 => 23,  64 => 21,  60 => 17,  57 => 16,  54 => 17,  51 => 13,  48 => 16,  45 => 9,  42 => 11,  39 => 7,  36 => 6,  33 => 4,  30 => 3,);
    }
}
