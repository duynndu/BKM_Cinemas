<?php

namespace App\Repositories\Admin\Systems\Repository;

use App\Models\System;
use App\Repositories\Admin\Systems\Interface\SystemInterface;

class SystemRepository implements SystemInterface
{
    const PAGINATION = 10;

    protected $system;


    public function __construct(
        System   $system,
    )
    {
        $this->system = $system;
    }

    public function getAllSystemByType0SideBar()
    {
        $systems = $this->system->where('type', 0)
            ->orderBy('order')
            ->get();

        return $systems;
    }

    public function getAllSystemByType0($request)
    {
        $systems = $this->system->where('type', 0);

        if ($request->name) {
            $systems = $systems->where('name', 'like', '%' . $request->name . '%');
        }

        if ($request->has('active') && $request->active !== null) {
            $systems = $systems->where('active', $request->active);
        }

        $systems = $systems->orderBy('order')
            ->orderBy('id');

        $systems = $systems->withCount('childs')->paginate(self::PAGINATION);

        return $systems;
    }

    public function getAllSystemBySystemId($request)
    {
        $systems = $this->system->where('type', $request->system_id);

        if ($request->name) {
            $systems = $systems->where('name', 'like', '%' . $request->name . '%');
        }

        if ($request->has('active') && $request->active !== null) {
            $systems = $systems->where('active', $request->active);
        }

        $systems = $systems->orderBy('order')
            ->orderBy('id')
            ->paginate(self::PAGINATION);

        $systems->appends($request->page);

        return $systems;
    }

    public function createSystem($data)
    {
        return $this->system->create($data);
    }

    public function getSystemById($id)
    {
        $system = $this->system->find($id);

        return $system;
    }

    public function updateSystem($data, $id)
    {
        $system = $this->system->find($id);

        $system->update($data);

        return $system;
    }

    public function delete($id)
    {
        $system = $this->system->find($id);

        if (!$system) {
            return redirect()->route('admin.systems.index')->with('status_failed', 'Không tìm thấy nội dung');
        }

        if ($system->type == 0) {
            $systemsToDelete = $this->system->where('type', $id)->get();

            foreach ($systemsToDelete as $item) {
                $item->delete();
            }
        }

        $system->delete();

        return $system;
    }
}
