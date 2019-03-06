<?php declare(strict_types=1);

namespace Lmc\HttpConstants;

/**
 * HTTP Headers based on IANA Message Headers Registry and Wikipedia list.
 *
 * @see https://www.iana.org/assignments/message-headers/message-headers.xml#perm-headers
 * @see https://www.iana.org/assignments/message-headers/message-headers.xml#prov-headers
 * @see https://en.wikipedia.org/wiki/List_of_HTTP_header_fields#Common_non-standard_request_fields
 * @see https://en.wikipedia.org/wiki/List_of_HTTP_header_fields#Common_non-standard_response_fields
 *
 * @codeCoverageIgnore
 */
final class Header implements HeaderInterface
{
    private function __construct()
    {
    }
}
