<?php if(! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Assets Helper
 *
 * groupe de fonctions qui retourne les chemins aux fichiers img, css, js 
 * du dossier 'assets'
 *
 */
 
 // --------------------------------------------------------------------

/**
 * avatar_url
 *
 * Retourne le chemin de l'avatar passée en paramètre
 *
 * @access	public
 * @param	string
 * @return	string (url)
 */
if ( ! function_exists('avatar_url'))
{
    function avatar_url($nom)
    {
        return base_url() . 'assets/img/avatars/' . $nom;
    }
}

// --------------------------------------------------------------------

/**
 * img
 *
 * Retourne le code HTML qui génère une image (nom en parametre)
 *
 * @access	public
 * @param	string
 * @return	string (balise <img>)
 */
if ( ! function_exists('img'))
{
    function img($nom, $alt = '', $att = '')
    {
        return '<img src="' . img_url($nom) . '" alt="' . $alt . '" '. $att .' />';
    }
}

// --------------------------------------------------------------------

/**
 * img_url
 *
 * Retourne le chemin de l'image passée en paramètre
 *
 * @access	public
 * @param	string
 * @return	string (url)
 */
if ( ! function_exists('img_url'))
{
    function img_url($nom)
    {
        return base_url() . 'assets/img/' . $nom;
    }
}

// --------------------------------------------------------------------

/**
 * format_code
 *
 * Minifie les codes js et css
 *
 * @access	public
 * @param	string
 * @return	string
 */
if ( ! function_exists('format_code'))
{
    function format_code($code)
    {
        $code = strtr($code, array(
            chr(0) => '',// caractère null
            chr(8) => '',// un backspace
            chr(9) => '',// une tabulation
            chr(10) => '', // une nouvelle ligne
            chr(11) => '',// une tabulation verticale
            chr(13) => '' // un retour chariot
        ));
        $code = preg_replace('#url\("../images/(.+)"\)#isU', 'url("'.img_url('$1').'")', $code);
        $code = preg_replace('#\s(\s{1,})#sU', '', $code);

        return $code;
    }
}

// --------------------------------------------------------------------

/**
 * Lien vers l'accueil!
 *
 * @return	string url
 */
if ( ! function_exists('home_url'))
{
    function home_url()
    {
        return base_url();
    }
}

// --------------------------------------------------------------------

/**
 * limiter_texte
 *
 * Retourne juste une portion (selon les paramètres) d'un long texte
 *
 * @access	public
 * @param	string
 * @return	string
 */
if ( ! function_exists('limiter_texte'))
{
    function limiter_texte($txt, $nbre=14)
    {
        if(!empty($txt)) {
            $nbre=(int)$nbre;
            $msg = substr($txt,$nbre,1);

            if($msg !=" "){
                while($msg !=" "){
                    $nbre++;
                    $msg = substr($txt,$nbre,1);
                }

            }

            $msg = substr($txt,0,$nbre);
            return $msg.'...';
        }
        return $txt;
    }
}

// --------------------------------------------------------------------

/**
 * css_url
 *
 * Retourne le chemin a un fichier css
 *
 * @access	public
 * @param	string
 * @return	string
 */
if( ! function_exists('css_url') )
{
	function css_url($nom)
	{
		if( is_string($nom) AND !empty($nom) AND file_exists('./assets/css/'.$nom.'.css') )
		{
			return base_url().'assets/css/'.$nom.'.css';
		}
		return false;
	}
}

// --------------------------------------------------------------------

/**
 * js_url
 *
 * Retourne le chemin a un fichier javascript
 *
 * @access	public
 * @param	string
 * @return	string
 */
if( ! function_exists('js_url') )
{
	function js_url($nom)
	{
		if( is_string($nom) AND !empty($nom) AND file_exists('./assets/js/'.$nom.'.js') )
		{
			return base_url().'assets/js/'.$nom.'.js';
		}
		return false;
	}
}

/* End of file assets_helper.php */
/* Location: ./application/helper/assets_helper.php */