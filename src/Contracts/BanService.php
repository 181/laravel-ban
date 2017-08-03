<?php

/*
 * This file is part of Laravel Ban.
 *
 * (c) Anton Komarev <a.komarev@cybercog.su>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cog\Laravel\Ban\Contracts;

use Cog\Laravel\Ban\Contracts\Bannable as BannableContract;

/**
 * Interface BanService.
 *
 * @package Cog\Laravel\Ban\Contracts
 */
interface BanService
{
    /**
     * Ban entity.
     *
     * @param \Cog\Laravel\Ban\Contracts\Bannable $bannable
     * @param array $attributes
     * @return \Cog\Laravel\Ban\Contracts\Ban
     */
    public function ban(BannableContract $bannable, array $attributes = []);

    /**
     * Unban entity.
     *
     * @param \Cog\Laravel\Ban\Contracts\Bannable $bannable
     * @return void
     */
    public function unban(BannableContract $bannable);

    /**
     * Delete all expired Ban models.
     *
     * @return void
     */
    public function deleteExpiredBans();
}
