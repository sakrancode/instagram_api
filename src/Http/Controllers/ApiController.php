<?php
/**
 * Instagram API class
 *
 * API Documentation: https://developers.facebook.com/
 * Class Documentation: https://github.com/sakrancode/instagram_api
 *
 * @author Muhammad Lutfi
 * @since 30.07.2021
 * @copyright 2021 SakranCode
 * @version 1.0
 * @license BSD http://www.opensource.org/licenses/bsd-license.php
 */

namespace Sakrancode\InstagramApi\Http\Controllers;

use App\Http\Controllers\Controller;

class ApiController extends Controller
{

    /**
     * The API base URL
     */
    const API_URL = 'https://api.instagram.com/';

    /**
     * The Graph API is the primary way to get data in and out of Facebook's platform
     */
    const GRAPH_URL = 'https://graph.instagram.com/';


    /**
     * The API OAuth URL
     */
    const OAUTH_URL = 'oauth/authorize';

    /**
     * The OAuth token URL
     */
    const OAUTH_TOKEN_URL = 'oauth/access_token';

    /**
     * The Instagram API Key
     *
     * @var string
     */
    private $_apikey;

    /**
     * The Instagram OAuth API secret
     *
     * @var string
     */
    private $_apisecret;

    /**
     * The callback URL
     *
     * @var string
     */
    private $_callbackurl;

    /**
     * The GET code parameter from URL
     *
     * @var string
     */
    private $_getCode = '';

    /**
     * The user access token
     *
     * @var string
     */
    private $_accesstoken;

    /**
     * Whether a signed header should be used
     *
     * @var boolean
     */
    private $_signedheader = false;

    /**
     * Available scopes
     *
     * @var array
     */
    private $_scopes = array('basic', 'likes', 'comments', 'relationships', 'user_profile', 'user_media');

    /**
     * Available actions
     *
     * @var array
     */
    private $_actions = array('follow', 'unfollow', 'block', 'unblock', 'approve', 'deny');

    /**
     * Default constructor
     *
     * @param array|string $param          url parameter
     * @return void
     */
    function __construct() {
        // save instagram code
        // $this->_getCode = $params['get_code'];
    }

    public function index()
    {
        return view('sakrancode.instagram-api::index', ['APP_ID' => config('sakrancode.instagram-api.INSTAGRAM_APP_ID'),
                                                    	'APP_SECRET' => config('sakrancode.instagram-api.INSTAGRAM_APP_SECRET'),
                                                    	'APP_REDIRECT_URI' => config('sakrancode.instagram-api.INSTAGRAM_APP_REDIRECT_URI')]);
    }



}
