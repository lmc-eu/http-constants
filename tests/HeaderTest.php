<?php

use Lmc\HttpConstants\Header;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \Lmc\HttpConstants\Header
 */
final class HeaderTest extends TestCase
{
    public function testAIm()
    {
        $this->assertSame('A-IM', Header::A_IM);
    }

    public function testAccept()
    {
        $this->assertSame('Accept', Header::ACCEPT);
    }

    public function testAcceptAdditions()
    {
        $this->assertSame('Accept-Additions', Header::ACCEPT_ADDITIONS);
    }

    public function testAcceptCharset()
    {
        $this->assertSame('Accept-Charset', Header::ACCEPT_CHARSET);
    }

    public function testAcceptDatetime()
    {
        $this->assertSame('Accept-Datetime', Header::ACCEPT_DATETIME);
    }

    public function testAcceptEncoding()
    {
        $this->assertSame('Accept-Encoding', Header::ACCEPT_ENCODING);
    }

    public function testAcceptFeatures()
    {
        $this->assertSame('Accept-Features', Header::ACCEPT_FEATURES);
    }

    public function testAcceptLanguage()
    {
        $this->assertSame('Accept-Language', Header::ACCEPT_LANGUAGE);
    }

    public function testAcceptPatch()
    {
        $this->assertSame('Accept-Patch', Header::ACCEPT_PATCH);
    }

    public function testAcceptPost()
    {
        $this->assertSame('Accept-Post', Header::ACCEPT_POST);
    }

    public function testAcceptRanges()
    {
        $this->assertSame('Accept-Ranges', Header::ACCEPT_RANGES);
    }

    public function testAge()
    {
        $this->assertSame('Age', Header::AGE);
    }

    public function testAllow()
    {
        $this->assertSame('Allow', Header::ALLOW);
    }

    public function testAlpn()
    {
        $this->assertSame('ALPN', Header::ALPN);
    }

    public function testAltSvc()
    {
        $this->assertSame('Alt-Svc', Header::ALT_SVC);
    }

    public function testAltUsed()
    {
        $this->assertSame('Alt-Used', Header::ALT_USED);
    }

    public function testAlternates()
    {
        $this->assertSame('Alternates', Header::ALTERNATES);
    }

    public function testApplyToRedirectRef()
    {
        $this->assertSame('Apply-To-Redirect-Ref', Header::APPLY_TO_REDIRECT_REF);
    }

    public function testAuthenticationControl()
    {
        $this->assertSame('Authentication-Control', Header::AUTHENTICATION_CONTROL);
    }

    public function testAuthenticationInfo()
    {
        $this->assertSame('Authentication-Info', Header::AUTHENTICATION_INFO);
    }

    public function testAuthorization()
    {
        $this->assertSame('Authorization', Header::AUTHORIZATION);
    }

    public function testCExt()
    {
        $this->assertSame('C-Ext', Header::C_EXT);
    }

    public function testCMan()
    {
        $this->assertSame('C-Man', Header::C_MAN);
    }

    public function testCOpt()
    {
        $this->assertSame('C-Opt', Header::C_OPT);
    }

    public function testCPep()
    {
        $this->assertSame('C-PEP', Header::C_PEP);
    }

    public function testCPepInfo()
    {
        $this->assertSame('C-PEP-Info', Header::C_PEP_INFO);
    }

    public function testCacheControl()
    {
        $this->assertSame('Cache-Control', Header::CACHE_CONTROL);
    }

    public function testCaldavTimezones()
    {
        $this->assertSame('CalDAV-Timezones', Header::CALDAV_TIMEZONES);
    }

    public function testClose()
    {
        $this->assertSame('Close', Header::CLOSE);
    }

    public function testConnection()
    {
        $this->assertSame('Connection', Header::CONNECTION);
    }

    public function testContentBase()
    {
        $this->assertSame('Content-Base', Header::CONTENT_BASE);
    }

    public function testContentDisposition()
    {
        $this->assertSame('Content-Disposition', Header::CONTENT_DISPOSITION);
    }

    public function testContentEncoding()
    {
        $this->assertSame('Content-Encoding', Header::CONTENT_ENCODING);
    }

    public function testContentId()
    {
        $this->assertSame('Content-ID', Header::CONTENT_ID);
    }

    public function testContentLanguage()
    {
        $this->assertSame('Content-Language', Header::CONTENT_LANGUAGE);
    }

    public function testContentLength()
    {
        $this->assertSame('Content-Length', Header::CONTENT_LENGTH);
    }

    public function testContentLocation()
    {
        $this->assertSame('Content-Location', Header::CONTENT_LOCATION);
    }

    public function testContentMd5()
    {
        $this->assertSame('Content-MD5', Header::CONTENT_MD5);
    }

    public function testContentRange()
    {
        $this->assertSame('Content-Range', Header::CONTENT_RANGE);
    }

    public function testContentScriptType()
    {
        $this->assertSame('Content-Script-Type', Header::CONTENT_SCRIPT_TYPE);
    }

    public function testContentStyleType()
    {
        $this->assertSame('Content-Style-Type', Header::CONTENT_STYLE_TYPE);
    }

    public function testContentType()
    {
        $this->assertSame('Content-Type', Header::CONTENT_TYPE);
    }

    public function testContentVersion()
    {
        $this->assertSame('Content-Version', Header::CONTENT_VERSION);
    }

    public function testCookie()
    {
        $this->assertSame('Cookie', Header::COOKIE);
    }

    public function testCookie2()
    {
        $this->assertSame('Cookie2', Header::COOKIE2);
    }

    public function testDasl()
    {
        $this->assertSame('DASL', Header::DASL);
    }

    public function testDav()
    {
        $this->assertSame('DAV', Header::DAV);
    }

    public function testDate()
    {
        $this->assertSame('Date', Header::DATE);
    }

    public function testDefaultStyle()
    {
        $this->assertSame('Default-Style', Header::DEFAULT_STYLE);
    }

    public function testDeltaBase()
    {
        $this->assertSame('Delta-Base', Header::DELTA_BASE);
    }

    public function testDepth()
    {
        $this->assertSame('Depth', Header::DEPTH);
    }

    public function testDerivedFrom()
    {
        $this->assertSame('Derived-From', Header::DERIVED_FROM);
    }

    public function testDestination()
    {
        $this->assertSame('Destination', Header::DESTINATION);
    }

    public function testDifferentialId()
    {
        $this->assertSame('Differential-ID', Header::DIFFERENTIAL_ID);
    }

    public function testDigest()
    {
        $this->assertSame('Digest', Header::DIGEST);
    }

    public function testEtag()
    {
        $this->assertSame('ETag', Header::ETAG);
    }

    public function testExpect()
    {
        $this->assertSame('Expect', Header::EXPECT);
    }

    public function testExpires()
    {
        $this->assertSame('Expires', Header::EXPIRES);
    }

    public function testExt()
    {
        $this->assertSame('Ext', Header::EXT);
    }

    public function testForwarded()
    {
        $this->assertSame('Forwarded', Header::FORWARDED);
    }

    public function testFrom()
    {
        $this->assertSame('From', Header::FROM);
    }

    public function testGetprofile()
    {
        $this->assertSame('GetProfile', Header::GETPROFILE);
    }

    public function testHobareg()
    {
        $this->assertSame('Hobareg', Header::HOBAREG);
    }

    public function testHost()
    {
        $this->assertSame('Host', Header::HOST);
    }

    public function testHttp2Settings()
    {
        $this->assertSame('HTTP2-Settings', Header::HTTP2_SETTINGS);
    }

    public function testIm()
    {
        $this->assertSame('IM', Header::IM);
    }

    public function testIf()
    {
        $this->assertSame('If', Header::IF);
    }

    public function testIfMatch()
    {
        $this->assertSame('If-Match', Header::IF_MATCH);
    }

    public function testIfModifiedSince()
    {
        $this->assertSame('If-Modified-Since', Header::IF_MODIFIED_SINCE);
    }

    public function testIfNoneMatch()
    {
        $this->assertSame('If-None-Match', Header::IF_NONE_MATCH);
    }

    public function testIfRange()
    {
        $this->assertSame('If-Range', Header::IF_RANGE);
    }

    public function testIfScheduleTagMatch()
    {
        $this->assertSame('If-Schedule-Tag-Match', Header::IF_SCHEDULE_TAG_MATCH);
    }

    public function testIfUnmodifiedSince()
    {
        $this->assertSame('If-Unmodified-Since', Header::IF_UNMODIFIED_SINCE);
    }

    public function testKeepAlive()
    {
        $this->assertSame('Keep-Alive', Header::KEEP_ALIVE);
    }

    public function testLabel()
    {
        $this->assertSame('Label', Header::LABEL);
    }

    public function testLastModified()
    {
        $this->assertSame('Last-Modified', Header::LAST_MODIFIED);
    }

    public function testLink()
    {
        $this->assertSame('Link', Header::LINK);
    }

    public function testLocation()
    {
        $this->assertSame('Location', Header::LOCATION);
    }

    public function testLockToken()
    {
        $this->assertSame('Lock-Token', Header::LOCK_TOKEN);
    }

    public function testMan()
    {
        $this->assertSame('Man', Header::MAN);
    }

    public function testMaxForwards()
    {
        $this->assertSame('Max-Forwards', Header::MAX_FORWARDS);
    }

    public function testMementoDatetime()
    {
        $this->assertSame('Memento-Datetime', Header::MEMENTO_DATETIME);
    }

    public function testMeter()
    {
        $this->assertSame('Meter', Header::METER);
    }

    public function testMimeVersion()
    {
        $this->assertSame('MIME-Version', Header::MIME_VERSION);
    }

    public function testNegotiate()
    {
        $this->assertSame('Negotiate', Header::NEGOTIATE);
    }

    public function testOpt()
    {
        $this->assertSame('Opt', Header::OPT);
    }

    public function testOptionalWwwAuthenticate()
    {
        $this->assertSame('Optional-WWW-Authenticate', Header::OPTIONAL_WWW_AUTHENTICATE);
    }

    public function testOrderingType()
    {
        $this->assertSame('Ordering-Type', Header::ORDERING_TYPE);
    }

    public function testOrigin()
    {
        $this->assertSame('Origin', Header::ORIGIN);
    }

    public function testOverwrite()
    {
        $this->assertSame('Overwrite', Header::OVERWRITE);
    }

    public function testP3p()
    {
        $this->assertSame('P3P', Header::P3P);
    }

    public function testPep()
    {
        $this->assertSame('PEP', Header::PEP);
    }

    public function testPicsLabel()
    {
        $this->assertSame('PICS-Label', Header::PICS_LABEL);
    }

    public function testPepInfo()
    {
        $this->assertSame('Pep-Info', Header::PEP_INFO);
    }

    public function testPosition()
    {
        $this->assertSame('Position', Header::POSITION);
    }

    public function testPragma()
    {
        $this->assertSame('Pragma', Header::PRAGMA);
    }

    public function testPrefer()
    {
        $this->assertSame('Prefer', Header::PREFER);
    }

    public function testPreferenceApplied()
    {
        $this->assertSame('Preference-Applied', Header::PREFERENCE_APPLIED);
    }

    public function testProfileobject()
    {
        $this->assertSame('ProfileObject', Header::PROFILEOBJECT);
    }

    public function testProtocol()
    {
        $this->assertSame('Protocol', Header::PROTOCOL);
    }

    public function testProtocolInfo()
    {
        $this->assertSame('Protocol-Info', Header::PROTOCOL_INFO);
    }

    public function testProtocolQuery()
    {
        $this->assertSame('Protocol-Query', Header::PROTOCOL_QUERY);
    }

    public function testProtocolRequest()
    {
        $this->assertSame('Protocol-Request', Header::PROTOCOL_REQUEST);
    }

    public function testProxyAuthenticate()
    {
        $this->assertSame('Proxy-Authenticate', Header::PROXY_AUTHENTICATE);
    }

    public function testProxyAuthenticationInfo()
    {
        $this->assertSame('Proxy-Authentication-Info', Header::PROXY_AUTHENTICATION_INFO);
    }

    public function testProxyAuthorization()
    {
        $this->assertSame('Proxy-Authorization', Header::PROXY_AUTHORIZATION);
    }

    public function testProxyFeatures()
    {
        $this->assertSame('Proxy-Features', Header::PROXY_FEATURES);
    }

    public function testProxyInstruction()
    {
        $this->assertSame('Proxy-Instruction', Header::PROXY_INSTRUCTION);
    }

    public function testPublic()
    {
        $this->assertSame('Public', Header::PUBLIC);
    }

    public function testPublicKeyPins()
    {
        $this->assertSame('Public-Key-Pins', Header::PUBLIC_KEY_PINS);
    }

    public function testPublicKeyPinsReportOnly()
    {
        $this->assertSame('Public-Key-Pins-Report-Only', Header::PUBLIC_KEY_PINS_REPORT_ONLY);
    }

    public function testRange()
    {
        $this->assertSame('Range', Header::RANGE);
    }

    public function testRedirectRef()
    {
        $this->assertSame('Redirect-Ref', Header::REDIRECT_REF);
    }

    public function testReferer()
    {
        $this->assertSame('Referer', Header::REFERER);
    }

    public function testRetryAfter()
    {
        $this->assertSame('Retry-After', Header::RETRY_AFTER);
    }

    public function testSafe()
    {
        $this->assertSame('Safe', Header::SAFE);
    }

    public function testScheduleReply()
    {
        $this->assertSame('Schedule-Reply', Header::SCHEDULE_REPLY);
    }

    public function testScheduleTag()
    {
        $this->assertSame('Schedule-Tag', Header::SCHEDULE_TAG);
    }

    public function testSecWebsocketAccept()
    {
        $this->assertSame('Sec-WebSocket-Accept', Header::SEC_WEBSOCKET_ACCEPT);
    }

    public function testSecWebsocketExtensions()
    {
        $this->assertSame('Sec-WebSocket-Extensions', Header::SEC_WEBSOCKET_EXTENSIONS);
    }

    public function testSecWebsocketKey()
    {
        $this->assertSame('Sec-WebSocket-Key', Header::SEC_WEBSOCKET_KEY);
    }

    public function testSecWebsocketProtocol()
    {
        $this->assertSame('Sec-WebSocket-Protocol', Header::SEC_WEBSOCKET_PROTOCOL);
    }

    public function testSecWebsocketVersion()
    {
        $this->assertSame('Sec-WebSocket-Version', Header::SEC_WEBSOCKET_VERSION);
    }

    public function testSecurityScheme()
    {
        $this->assertSame('Security-Scheme', Header::SECURITY_SCHEME);
    }

    public function testServer()
    {
        $this->assertSame('Server', Header::SERVER);
    }

    public function testSetCookie()
    {
        $this->assertSame('Set-Cookie', Header::SET_COOKIE);
    }

    public function testSetCookie2()
    {
        $this->assertSame('Set-Cookie2', Header::SET_COOKIE2);
    }

    public function testSetprofile()
    {
        $this->assertSame('SetProfile', Header::SETPROFILE);
    }

    public function testSlug()
    {
        $this->assertSame('SLUG', Header::SLUG);
    }

    public function testSoapaction()
    {
        $this->assertSame('SoapAction', Header::SOAPACTION);
    }

    public function testStatusUri()
    {
        $this->assertSame('Status-URI', Header::STATUS_URI);
    }

    public function testStrictTransportSecurity()
    {
        $this->assertSame('Strict-Transport-Security', Header::STRICT_TRANSPORT_SECURITY);
    }

    public function testSurrogateCapability()
    {
        $this->assertSame('Surrogate-Capability', Header::SURROGATE_CAPABILITY);
    }

    public function testSurrogateControl()
    {
        $this->assertSame('Surrogate-Control', Header::SURROGATE_CONTROL);
    }

    public function testTcn()
    {
        $this->assertSame('TCN', Header::TCN);
    }

    public function testTe()
    {
        $this->assertSame('TE', Header::TE);
    }

    public function testTimeout()
    {
        $this->assertSame('Timeout', Header::TIMEOUT);
    }

    public function testTopic()
    {
        $this->assertSame('Topic', Header::TOPIC);
    }

    public function testTrailer()
    {
        $this->assertSame('Trailer', Header::TRAILER);
    }

    public function testTransferEncoding()
    {
        $this->assertSame('Transfer-Encoding', Header::TRANSFER_ENCODING);
    }

    public function testTtl()
    {
        $this->assertSame('TTL', Header::TTL);
    }

    public function testUrgency()
    {
        $this->assertSame('Urgency', Header::URGENCY);
    }

    public function testUri()
    {
        $this->assertSame('URI', Header::URI);
    }

    public function testUpgrade()
    {
        $this->assertSame('Upgrade', Header::UPGRADE);
    }

    public function testUserAgent()
    {
        $this->assertSame('User-Agent', Header::USER_AGENT);
    }

    public function testVariantVary()
    {
        $this->assertSame('Variant-Vary', Header::VARIANT_VARY);
    }

    public function testVary()
    {
        $this->assertSame('Vary', Header::VARY);
    }

    public function testVia()
    {
        $this->assertSame('Via', Header::VIA);
    }

    public function testWwwAuthenticate()
    {
        $this->assertSame('WWW-Authenticate', Header::WWW_AUTHENTICATE);
    }

    public function testWantDigest()
    {
        $this->assertSame('Want-Digest', Header::WANT_DIGEST);
    }

    public function testWarning()
    {
        $this->assertSame('Warning', Header::WARNING);
    }

    public function testXFrameOptions()
    {
        $this->assertSame('X-Frame-Options', Header::X_FRAME_OPTIONS);
    }

    public function testAccessControl()
    {
        $this->assertSame('Access-Control', Header::ACCESS_CONTROL);
    }

    public function testAccessControlAllowCredentials()
    {
        $this->assertSame('Access-Control-Allow-Credentials', Header::ACCESS_CONTROL_ALLOW_CREDENTIALS);
    }

    public function testAccessControlAllowHeaders()
    {
        $this->assertSame('Access-Control-Allow-Headers', Header::ACCESS_CONTROL_ALLOW_HEADERS);
    }

    public function testAccessControlAllowMethods()
    {
        $this->assertSame('Access-Control-Allow-Methods', Header::ACCESS_CONTROL_ALLOW_METHODS);
    }

    public function testAccessControlAllowOrigin()
    {
        $this->assertSame('Access-Control-Allow-Origin', Header::ACCESS_CONTROL_ALLOW_ORIGIN);
    }

    public function testAccessControlMaxAge()
    {
        $this->assertSame('Access-Control-Max-Age', Header::ACCESS_CONTROL_MAX_AGE);
    }

    public function testAccessControlRequestMethod()
    {
        $this->assertSame('Access-Control-Request-Method', Header::ACCESS_CONTROL_REQUEST_METHOD);
    }

    public function testAccessControlRequestHeaders()
    {
        $this->assertSame('Access-Control-Request-Headers', Header::ACCESS_CONTROL_REQUEST_HEADERS);
    }

    public function testCompliance()
    {
        $this->assertSame('Compliance', Header::COMPLIANCE);
    }

    public function testContentTransferEncoding()
    {
        $this->assertSame('Content-Transfer-Encoding', Header::CONTENT_TRANSFER_ENCODING);
    }

    public function testCost()
    {
        $this->assertSame('Cost', Header::COST);
    }

    public function testEdiintFeatures()
    {
        $this->assertSame('EDIINT-Features', Header::EDIINT_FEATURES);
    }

    public function testMessageId()
    {
        $this->assertSame('Message-ID', Header::MESSAGE_ID);
    }

    public function testMethodCheck()
    {
        $this->assertSame('Method-Check', Header::METHOD_CHECK);
    }

    public function testMethodCheckExpires()
    {
        $this->assertSame('Method-Check-Expires', Header::METHOD_CHECK_EXPIRES);
    }

    public function testNonCompliance()
    {
        $this->assertSame('Non-Compliance', Header::NON_COMPLIANCE);
    }

    public function testOptional()
    {
        $this->assertSame('Optional', Header::OPTIONAL);
    }

    public function testRefererRoot()
    {
        $this->assertSame('Referer-Root', Header::REFERER_ROOT);
    }

    public function testResolutionHint()
    {
        $this->assertSame('Resolution-Hint', Header::RESOLUTION_HINT);
    }

    public function testResolverLocation()
    {
        $this->assertSame('Resolver-Location', Header::RESOLVER_LOCATION);
    }

    public function testSubok()
    {
        $this->assertSame('SubOK', Header::SUBOK);
    }

    public function testSubst()
    {
        $this->assertSame('Subst', Header::SUBST);
    }

    public function testTitle()
    {
        $this->assertSame('Title', Header::TITLE);
    }

    public function testUaColor()
    {
        $this->assertSame('UA-Color', Header::UA_COLOR);
    }

    public function testUaMedia()
    {
        $this->assertSame('UA-Media', Header::UA_MEDIA);
    }

    public function testUaPixels()
    {
        $this->assertSame('UA-Pixels', Header::UA_PIXELS);
    }

    public function testUaResolution()
    {
        $this->assertSame('UA-Resolution', Header::UA_RESOLUTION);
    }

    public function testUaWindowpixels()
    {
        $this->assertSame('UA-Windowpixels', Header::UA_WINDOWPIXELS);
    }

    public function testVersion()
    {
        $this->assertSame('Version', Header::VERSION);
    }

    public function testXDeviceAccept()
    {
        $this->assertSame('X-Device-Accept', Header::X_DEVICE_ACCEPT);
    }

    public function testXDeviceAcceptCharset()
    {
        $this->assertSame('X-Device-Accept-Charset', Header::X_DEVICE_ACCEPT_CHARSET);
    }

    public function testXDeviceAcceptEncoding()
    {
        $this->assertSame('X-Device-Accept-Encoding', Header::X_DEVICE_ACCEPT_ENCODING);
    }

    public function testXDeviceAcceptLanguage()
    {
        $this->assertSame('X-Device-Accept-Language', Header::X_DEVICE_ACCEPT_LANGUAGE);
    }

    public function testXDeviceUserAgent()
    {
        $this->assertSame('X-Device-User-Agent', Header::X_DEVICE_USER_AGENT);
    }

    public function testContentSecurityPolicy()
    {
        $this->assertSame('Content-Security-Policy', Header::CONTENT_SECURITY_POLICY);
    }

    public function testDnt()
    {
        $this->assertSame('DNT', Header::DNT);
    }

    public function testProxyConnection()
    {
        $this->assertSame('Proxy-Connection', Header::PROXY_CONNECTION);
    }

    public function testStatus()
    {
        $this->assertSame('Status', Header::STATUS);
    }

    public function testUpgradeInsecureRequests()
    {
        $this->assertSame('Upgrade-Insecure-Requests', Header::UPGRADE_INSECURE_REQUESTS);
    }

    public function testXContentDuration()
    {
        $this->assertSame('X-Content-Duration', Header::X_CONTENT_DURATION);
    }

    public function testXContentSecurityPolicy()
    {
        $this->assertSame('X-Content-Security-Policy', Header::X_CONTENT_SECURITY_POLICY);
    }

    public function testXContentTypeOptions()
    {
        $this->assertSame('X-Content-Type-Options', Header::X_CONTENT_TYPE_OPTIONS);
    }

    public function testXCorrelationId()
    {
        $this->assertSame('X-Correlation-ID', Header::X_CORRELATION_ID);
    }

    public function testXCsrfToken()
    {
        $this->assertSame('X-Csrf-Token', Header::X_CSRF_TOKEN);
    }

    public function testXForwardedFor()
    {
        $this->assertSame('X-Forwarded-For', Header::X_FORWARDED_FOR);
    }

    public function testXForwardedHost()
    {
        $this->assertSame('X-Forwarded-Host', Header::X_FORWARDED_HOST);
    }

    public function testXForwardedProto()
    {
        $this->assertSame('X-Forwarded-Proto', Header::X_FORWARDED_PROTO);
    }

    public function testXHttpMethodOverride()
    {
        $this->assertSame('X-Http-Method-Override', Header::X_HTTP_METHOD_OVERRIDE);
    }

    public function testXPoweredBy()
    {
        $this->assertSame('X-Powered-By', Header::X_POWERED_BY);
    }

    public function testXRequestId()
    {
        $this->assertSame('X-Request-ID', Header::X_REQUEST_ID);
    }

    public function testXRequestedWith()
    {
        $this->assertSame('X-Requested-With', Header::X_REQUESTED_WITH);
    }

    public function testXUaCompatible()
    {
        $this->assertSame('X-UA-Compatible', Header::X_UA_COMPATIBLE);
    }

    public function testXUidh()
    {
        $this->assertSame('X-UIDH', Header::X_UIDH);
    }

    public function testXWapProfile()
    {
        $this->assertSame('X-Wap-Profile', Header::X_WAP_PROFILE);
    }

    public function testXWebkitCsp()
    {
        $this->assertSame('X-WebKit-CSP', Header::X_WEBKIT_CSP);
    }

    public function testXXssProtection()
    {
        $this->assertSame('X-XSS-Protection', Header::X_XSS_PROTECTION);
    }
}
