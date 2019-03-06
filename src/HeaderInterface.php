<?php

namespace Lmc\HttpConstants;

/**
 * HTTP Headers based on IANA Message Headers Registry and Wikipedia list.
 *
 * @see https://www.iana.org/assignments/message-headers/message-headers.xml#perm-headers
 * @see https://www.iana.org/assignments/message-headers/message-headers.xml#prov-headers
 * @see https://en.wikipedia.org/wiki/List_of_HTTP_header_fields#Common_non-standard_request_fields
 * @see https://en.wikipedia.org/wiki/List_of_HTTP_header_fields#Common_non-standard_response_fields
 */
interface HeaderInterface
{
    // Permanent Message Headers

    const A_IM = 'A-IM'; // RFC4229
    const ACCEPT = 'Accept'; // RFC7231, Section 5.3.2
    const ACCEPT_ADDITIONS = 'Accept-Additions'; // RFC4229
    const ACCEPT_CHARSET = 'Accept-Charset'; // RFC7231, Section 5.3.3
    const ACCEPT_DATETIME = 'Accept-Datetime'; // RFC7089
    const ACCEPT_ENCODING = 'Accept-Encoding'; // RFC7231, Section 5.3.4, RFC7694, Section 3
    const ACCEPT_FEATURES = 'Accept-Features'; // RFC4229
    const ACCEPT_LANGUAGE = 'Accept-Language'; // RFC7231, Section 5.3.5
    const ACCEPT_PATCH = 'Accept-Patch'; // RFC5789
    const ACCEPT_POST = 'Accept-Post'; // https://www.w3.org/TR/ldp/
    const ACCEPT_RANGES = 'Accept-Ranges'; // RFC7233, Section 2.3
    const AGE = 'Age'; // RFC7234, Section 5.1
    const ALLOW = 'Allow'; // RFC7231, Section 7.4.1
    const ALPN = 'ALPN'; // RFC7639, Section 2
    const ALT_SVC = 'Alt-Svc'; // RFC7838
    const ALT_USED = 'Alt-Used'; // RFC7838
    const ALTERNATES = 'Alternates'; // RFC4229
    const APPLY_TO_REDIRECT_REF = 'Apply-To-Redirect-Ref'; // RFC4437
    const AUTHENTICATION_CONTROL = 'Authentication-Control'; // RFC8053, Section 4
    const AUTHENTICATION_INFO = 'Authentication-Info'; // RFC7615, Section 3
    const AUTHORIZATION = 'Authorization'; // RFC7235, Section 4.2
    const C_EXT = 'C-Ext'; // RFC4229
    const C_MAN = 'C-Man'; // RFC4229
    const C_OPT = 'C-Opt'; // RFC4229
    const C_PEP = 'C-PEP'; // RFC4229
    const C_PEP_INFO = 'C-PEP-Info'; // RFC4229
    const CACHE_CONTROL = 'Cache-Control'; // RFC7234, Section 5.2
    const CALDAV_TIMEZONES = 'CalDAV-Timezones'; // RFC7809, Section 7.1
    const CLOSE = 'Close'; // RFC7230, Section 8.1
    const CONNECTION = 'Connection'; // RFC7230, Section 6.1
    /** @deprecated */
    const CONTENT_BASE = 'Content-Base'; // RFC2068, RFC2616
    const CONTENT_DISPOSITION = 'Content-Disposition'; // RFC6266
    const CONTENT_ENCODING = 'Content-Encoding'; // RFC7231, Section 3.1.2.2
    const CONTENT_ID = 'Content-ID'; // RFC4229
    const CONTENT_LANGUAGE = 'Content-Language'; // RFC7231, Section 3.1.3.2
    const CONTENT_LENGTH = 'Content-Length'; // RFC7230, Section 3.3.2
    const CONTENT_LOCATION = 'Content-Location'; // RFC7231, Section 3.1.4.2
    const CONTENT_MD5 = 'Content-MD5'; // RFC4229
    const CONTENT_RANGE = 'Content-Range'; // RFC7233, Section 4.2
    const CONTENT_SCRIPT_TYPE = 'Content-Script-Type'; // RFC4229
    const CONTENT_STYLE_TYPE = 'Content-Style-Type'; // RFC4229
    const CONTENT_TYPE = 'Content-Type'; // RFC7231, Section 3.1.1.5
    const CONTENT_VERSION = 'Content-Version'; // RFC4229
    const COOKIE = 'Cookie'; // RFC6265
    /** @deprecated */
    const COOKIE2 = 'Cookie2'; // RFC2965, RFC6265
    const DASL = 'DASL'; // RFC5323
    const DAV = 'DAV'; // RFC4918
    const DATE = 'Date'; // RFC7231, Section 7.1.1.2
    const DEFAULT_STYLE = 'Default-Style'; // RFC4229
    const DELTA_BASE = 'Delta-Base'; // RFC4229
    const DEPTH = 'Depth'; // RFC4918
    const DERIVED_FROM = 'Derived-From'; // RFC4229
    const DESTINATION = 'Destination'; // RFC4918
    const DIFFERENTIAL_ID = 'Differential-ID'; // RFC4229
    const DIGEST = 'Digest'; // RFC4229
    const ETAG = 'ETag'; // RFC7232, Section 2.3
    const EXPECT = 'Expect'; // RFC7231, Section 5.1.1
    const EXPIRES = 'Expires'; // RFC7234, Section 5.3
    const EXT = 'Ext'; // RFC4229
    const FORWARDED = 'Forwarded'; // RFC7239
    const FROM = 'From'; // RFC7231, Section 5.5.1
    const GETPROFILE = 'GetProfile'; // RFC4229
    const HOBAREG = 'Hobareg'; // RFC7486, Section 6.1.1
    const HOST = 'Host'; // RFC7230, Section 5.4
    const HTTP2_SETTINGS = 'HTTP2-Settings'; // RFC7540, Section 3.2.1
    const IM = 'IM'; // RFC4229
    const IF = 'If'; // RFC4918
    const IF_MATCH = 'If-Match'; // RFC7232, Section 3.1
    const IF_MODIFIED_SINCE = 'If-Modified-Since'; // RFC7232, Section 3.3
    const IF_NONE_MATCH = 'If-None-Match'; // RFC7232, Section 3.2
    const IF_RANGE = 'If-Range'; // RFC7233, Section 3.2
    const IF_SCHEDULE_TAG_MATCH = 'If-Schedule-Tag-Match'; // RFC6638
    const IF_UNMODIFIED_SINCE = 'If-Unmodified-Since'; // RFC7232, Section 3.4
    const KEEP_ALIVE = 'Keep-Alive'; // RFC4229
    const LABEL = 'Label'; // RFC4229
    const LAST_MODIFIED = 'Last-Modified'; // RFC7232, Section 2.2
    const LINK = 'Link'; // RFC5988
    const LOCATION = 'Location'; // RFC7231, Section 7.1.2
    const LOCK_TOKEN = 'Lock-Token'; // RFC4918
    const MAN = 'Man'; // RFC4229
    const MAX_FORWARDS = 'Max-Forwards'; // RFC7231, Section 5.1.2
    const MEMENTO_DATETIME = 'Memento-Datetime'; // RFC7089
    const METER = 'Meter'; // RFC4229
    const MIME_VERSION = 'MIME-Version'; // RFC7231, Appendix A.1
    const NEGOTIATE = 'Negotiate'; // RFC4229
    const OPT = 'Opt'; // RFC4229
    const OPTIONAL_WWW_AUTHENTICATE = 'Optional-WWW-Authenticate'; // RFC8053, Section 3
    const ORDERING_TYPE = 'Ordering-Type'; // RFC4229
    const ORIGIN = 'Origin'; // RFC6454
    const OVERWRITE = 'Overwrite'; // RFC4918
    const P3P = 'P3P'; // RFC4229
    const PEP = 'PEP'; // RFC4229
    const PICS_LABEL = 'PICS-Label'; // RFC4229
    const PEP_INFO = 'Pep-Info'; // RFC4229
    const POSITION = 'Position'; // RFC4229
    const PRAGMA = 'Pragma'; // RFC7234, Section 5.4
    const PREFER = 'Prefer'; // RFC7240
    const PREFERENCE_APPLIED = 'Preference-Applied'; // RFC7240
    const PROFILEOBJECT = 'ProfileObject'; // RFC4229
    const PROTOCOL = 'Protocol'; // RFC4229
    const PROTOCOL_INFO = 'Protocol-Info'; // RFC4229
    const PROTOCOL_QUERY = 'Protocol-Query'; // RFC4229
    const PROTOCOL_REQUEST = 'Protocol-Request'; // RFC4229
    const PROXY_AUTHENTICATE = 'Proxy-Authenticate'; // RFC7235, Section 4.3
    const PROXY_AUTHENTICATION_INFO = 'Proxy-Authentication-Info'; // RFC7615, Section 4
    const PROXY_AUTHORIZATION = 'Proxy-Authorization'; // RFC7235, Section 4.4
    const PROXY_FEATURES = 'Proxy-Features'; // RFC4229
    const PROXY_INSTRUCTION = 'Proxy-Instruction'; // RFC4229
    const PUBLIC = 'Public'; // RFC4229
    const PUBLIC_KEY_PINS = 'Public-Key-Pins'; // RFC7469
    const PUBLIC_KEY_PINS_REPORT_ONLY = 'Public-Key-Pins-Report-Only'; // RFC7469
    const RANGE = 'Range'; // RFC7233, Section 3.1
    const REDIRECT_REF = 'Redirect-Ref'; // RFC4437
    const REFERER = 'Referer'; // RFC7231, Section 5.5.2
    const RETRY_AFTER = 'Retry-After'; // RFC7231, Section 7.1.3
    const SAFE = 'Safe'; // RFC4229
    const SCHEDULE_REPLY = 'Schedule-Reply'; // RFC6638
    const SCHEDULE_TAG = 'Schedule-Tag'; // RFC6638
    const SEC_WEBSOCKET_ACCEPT = 'Sec-WebSocket-Accept'; // RFC6455
    const SEC_WEBSOCKET_EXTENSIONS = 'Sec-WebSocket-Extensions'; // RFC6455
    const SEC_WEBSOCKET_KEY = 'Sec-WebSocket-Key'; // RFC6455
    const SEC_WEBSOCKET_PROTOCOL = 'Sec-WebSocket-Protocol'; // RFC6455
    const SEC_WEBSOCKET_VERSION = 'Sec-WebSocket-Version'; // RFC6455
    const SECURITY_SCHEME = 'Security-Scheme'; // RFC4229
    const SERVER = 'Server'; // RFC7231, Section 7.4.2
    const SET_COOKIE = 'Set-Cookie'; // RFC6265
    /** @deprecated */
    const SET_COOKIE2 = 'Set-Cookie2'; // RFC2965, RFC6265
    const SETPROFILE = 'SetProfile'; // RFC4229
    const SLUG = 'SLUG'; // RFC5023
    const SOAPACTION = 'SoapAction'; // RFC4229
    const STATUS_URI = 'Status-URI'; // RFC4229
    const STRICT_TRANSPORT_SECURITY = 'Strict-Transport-Security'; // RFC6797
    const SURROGATE_CAPABILITY = 'Surrogate-Capability'; // RFC4229
    const SURROGATE_CONTROL = 'Surrogate-Control'; // RFC4229
    const TCN = 'TCN'; // RFC4229
    const TE = 'TE'; // RFC7230, Section 4.3
    const TIMEOUT = 'Timeout'; // RFC4918
    const TOPIC = 'Topic'; // RFC8030, Section 5.4
    const TRAILER = 'Trailer'; // RFC7230, Section 4.4
    const TRANSFER_ENCODING = 'Transfer-Encoding'; // RFC7230, Section 3.3.1
    const TTL = 'TTL'; // RFC8030, Section 5.2
    const URGENCY = 'Urgency'; // RFC8030, Section 5.3
    const URI = 'URI'; // RFC4229
    const UPGRADE = 'Upgrade'; // RFC7230, Section 6.7
    const USER_AGENT = 'User-Agent'; // RFC7231, Section 5.5.3
    const VARIANT_VARY = 'Variant-Vary'; // RFC4229
    const VARY = 'Vary'; // RFC7231, Section 7.1.4
    const VIA = 'Via'; // RFC7230, Section 5.7.1
    const WWW_AUTHENTICATE = 'WWW-Authenticate'; // RFC7235, Section 4.1
    const WANT_DIGEST = 'Want-Digest'; // RFC4229
    const WARNING = 'Warning'; // RFC7234, Section 5.5
    const X_FRAME_OPTIONS = 'X-Frame-Options'; // RFC7034

    // Provisional Message Headers

    /** @deprecated */
    const ACCESS_CONTROL = 'Access-Control'; // W3C Web Application Formats WG
    const ACCESS_CONTROL_ALLOW_CREDENTIALS = 'Access-Control-Allow-Credentials'; // W3C Web Application Formats WG
    const ACCESS_CONTROL_ALLOW_HEADERS = 'Access-Control-Allow-Headers'; // W3C Web Application Formats WG
    const ACCESS_CONTROL_ALLOW_METHODS = 'Access-Control-Allow-Methods'; // W3C Web Application Formats WG
    const ACCESS_CONTROL_ALLOW_ORIGIN = 'Access-Control-Allow-Origin'; // W3C Web Application Formats WG
    const ACCESS_CONTROL_MAX_AGE = 'Access-Control-Max-Age'; // W3C Web Application Formats WG
    const ACCESS_CONTROL_REQUEST_METHOD = 'Access-Control-Request-Method'; // W3C Web Application Formats WG
    const ACCESS_CONTROL_REQUEST_HEADERS = 'Access-Control-Request-Headers'; // W3C Web Application Formats WG
    const COMPLIANCE = 'Compliance'; // RFC4229
    const CONTENT_TRANSFER_ENCODING = 'Content-Transfer-Encoding'; // RFC4229
    const COST = 'Cost'; // RFC4229
    const EDIINT_FEATURES = 'EDIINT-Features'; // RFC6017
    const MESSAGE_ID = 'Message-ID'; // RFC4229
    /** @deprecated */
    const METHOD_CHECK = 'Method-Check'; // W3C Web Application Formats WG
    /** @deprecated */
    const METHOD_CHECK_EXPIRES = 'Method-Check-Expires'; // W3C Web Application Formats WG
    const NON_COMPLIANCE = 'Non-Compliance'; // RFC4229
    const OPTIONAL = 'Optional'; // RFC4229
    /** @deprecated */
    const REFERER_ROOT = 'Referer-Root'; // W3C Web Application Formats WG
    const RESOLUTION_HINT = 'Resolution-Hint'; // RFC4229
    const RESOLVER_LOCATION = 'Resolver-Location'; // RFC4229
    const SUBOK = 'SubOK'; // RFC4229
    const SUBST = 'Subst'; // RFC4229
    const TITLE = 'Title'; // RFC4229
    const UA_COLOR = 'UA-Color'; // RFC4229
    const UA_MEDIA = 'UA-Media'; // RFC4229
    const UA_PIXELS = 'UA-Pixels'; // RFC4229
    const UA_RESOLUTION = 'UA-Resolution'; // RFC4229
    const UA_WINDOWPIXELS = 'UA-Windowpixels'; // RFC4229
    const VERSION = 'Version'; // RFC4229
    const X_DEVICE_ACCEPT = 'X-Device-Accept'; // W3C Mobile Web Best Practices WG
    const X_DEVICE_ACCEPT_CHARSET = 'X-Device-Accept-Charset'; // W3C Mobile Web Best Practices WG
    const X_DEVICE_ACCEPT_ENCODING = 'X-Device-Accept-Encoding'; // W3C Mobile Web Best Practices WG
    const X_DEVICE_ACCEPT_LANGUAGE = 'X-Device-Accept-Language'; // W3C Mobile Web Best Practices WG
    const X_DEVICE_USER_AGENT = 'X-Device-User-Agent'; // W3C Mobile Web Best Practices WG

    // Non-standard Headers

    const CONTENT_SECURITY_POLICY = 'Content-Security-Policy';
    const DNT = 'DNT';
    const PROXY_CONNECTION = 'Proxy-Connection';
    const STATUS = 'Status';
    const UPGRADE_INSECURE_REQUESTS = 'Upgrade-Insecure-Requests';
    const X_CONTENT_DURATION = 'X-Content-Duration';
    const X_CONTENT_SECURITY_POLICY = 'X-Content-Security-Policy';
    const X_CONTENT_TYPE_OPTIONS = 'X-Content-Type-Options';
    const X_CORRELATION_ID = 'X-Correlation-ID';
    const X_CSRF_TOKEN = 'X-Csrf-Token';
    const X_FORWARDED_FOR = 'X-Forwarded-For';
    const X_FORWARDED_HOST = 'X-Forwarded-Host';
    const X_FORWARDED_PROTO = 'X-Forwarded-Proto';
    const X_HTTP_METHOD_OVERRIDE = 'X-Http-Method-Override';
    const X_POWERED_BY = 'X-Powered-By';
    const X_REQUEST_ID = 'X-Request-ID';
    const X_REQUESTED_WITH = 'X-Requested-With';
    const X_UA_COMPATIBLE = 'X-UA-Compatible';
    const X_UIDH = 'X-UIDH';
    const X_WAP_PROFILE = 'X-Wap-Profile';
    const X_WEBKIT_CSP = 'X-WebKit-CSP';
    const X_XSS_PROTECTION = 'X-XSS-Protection';
}
