<?php
/*
 * (c) Minh Vuong <vuongxuongminh@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

declare(strict_types=1);

namespace Hasura\Bundle\Metadata;

use Hasura\Bundle\ExceptionInterface;

final class ChildRoleMissingException extends \RuntimeException implements ExceptionInterface
{
}
