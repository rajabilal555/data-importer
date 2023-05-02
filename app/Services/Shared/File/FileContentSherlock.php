<?php
/*
 * FileContentSherlock.php
 * Copyright (c) 2023 james@firefly-iii.org
 *
 * This file is part of the Firefly III Data Importer
 * (https://github.com/firefly-iii/data-importer).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

namespace App\Services\Shared\File;

/**
 * Class FileContentSherlock
 */
class FileContentSherlock
{
    public function detectContentType(?string $file): string
    {
        if (null === $file) {
            return 'unknown';
        }
        // some pseudo code below:
        /*
         * $content= file_get_contents($file);
         * if($this->isCamtFile($content)) {
         * return 'camt';
         * }
         */

        return 'csv';
    }

    public function detectContentTypeFromContent(?string $content): string
    {
        if (null === $content) {
            return 'unknown';
        }
        // some pseudo code below:
        /*
         * if($this->isCamtFile($content)) {
         * return 'camt';
         * }
         */

        return 'csv';
    }
}