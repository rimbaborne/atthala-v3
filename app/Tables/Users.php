<?php

namespace App\Tables;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use ProtoneMedia\Splade\AbstractTable;
use ProtoneMedia\Splade\SpladeTable;
use ProtoneMedia\Splade\Facades\Toast;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;
use Illuminate\Support\Str;
use App\Repositories\Interface\DivisiRepoInterface;

class Users extends AbstractTable
{
    /**
     * Create a new instance.
     *
     * @return void
     */
    private DivisiRepoInterface $divisiRepo;
    public function __construct(
        DivisiRepoInterface $divisiRepo
    )
    {
        $this->divisiRepo = $divisiRepo;
    }

    /**
     * Determine if the user is authorized to perform bulk actions and exports.
     *
     * @return bool
     */
    public function authorize(Request $request)
    {
        return true;
    }

    /**
     * The resource or query builder.
     *
     * @return mixed
     */
    public function for()
    {
        return User::class;
    }

    /**
     * Configure the given SpladeTable.
     *
     * @param \ProtoneMedia\Splade\SpladeTable $table
     * @return void
     */
    public function configure(SpladeTable $table)
    {
        $table->withGlobalSearch(columns:['name', 'email'])
            ->column(
                label:'data',
                key: 'hitung',
                as: function (User $user) {
                    $a = $user->has_roles->role->id;
                    $b = $this->divisiRepo->getData();
                    return $b;
                }
            )
            ->rowLink(fn (User $user) => route('superadmin.roles.index', ['id' => $user->id]))
            ->export()
            ->column('name')
            ->column('email')
            ->bulkAction(
                label: 'Delete Users',
                each: fn (User $user) => $user->delete(),
                confirm: true,
                requirePassword: true,
            )
            ->column('action')
            ->paginate(10);
    }
}
