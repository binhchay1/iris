<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\MembersRepository;
use App\Http\Requests\MemberRequest;
use App\Http\Requests\UpdateMemberRequest;
use App\Models\Members;

class MemberController extends Controller
{
    private MembersRepository $memberRepository;

    public function __construct(
        MembersRepository $memberRepository
    ) {
        $this->memberRepository = $memberRepository;
    }

    public function listMemberAdmin(Request $request)
    {
        $filters = [];
        if (isset($request->name)) {
            $filters['name'] = $request->name;
        }

        if (isset($request->role)) {
            $filters['role'] = $request->role;
        }

        $member = $this->memberRepository->getListMember($filters);

        return view('admin.member.index', compact('member'));
    }

    public function createMember()
    {
        return view('admin.member.create');
    }

    public function viewUpdateMember(Members $member)
    {
        return view('admin.member.update', compact('member'));
    }

    public function updateMember(UpdateMemberRequest $request, Members $member)
    {
        $data = [
            'name' => $request->name,
            'role' => $request->role,
            'gender' => $request->gender,
        ];

        if ($request->file()) {

            $path = '/uploads/member';
            $image = $request->file('img');
            $image_name = $image->getClientOriginalName();
            $image_add = $image_name . "_" . time();
            $image->move(public_path($path), $image_add);

            $data['img'] = "$path/$image_add";
        }

        $isUpdated = $this->memberRepository->updateById($member->id, $data);
        if ($isUpdated) {
            alert()->success('Thành công!', 'Cập nhật ' . $request->name . ' thành công!');
        } else {
            alert()->warning('Cảnh báo!', 'Cập nhật thành viên lỗi!');
        }

        return redirect()->route('admin.members.index');
    }

    public function storeMember(MemberRequest $request)
    {
        $data = [
            'name' => $request->name,
            'role' => $request->role,
            'gender' => $request->gender,
        ];

        if ($request->file()) {

            $path = '/uploads/member';
            $image = $request->file('img');
            $image_name = $image->getClientOriginalName();
            $image_add = $image_name . "_" . time();
            $image->move(public_path($path), $image_add);

            $data['img'] = "$path/$image_add";
        }

        $member = $this->memberRepository->create($data);

        if ($member instanceof Members) {
            alert()->success('Thành công!', 'Tạo thành viên thành công!');
        } else {
            alert()->warning('Cảnh báo!', 'Tạo thành viên lỗi!');
        }

        return redirect()->route('admin.members.index');
    }

    public function deleteMember(int $memberId = 0)
    {
        if(request()->get('id')) {
            $memberId = (int) request()->get('id');
        }

        $this->memberRepository->deleteById($memberId);

        alert()->success('Thành công!', 'Xóa thành viên thành công!');
        return redirect()->route('admin.members.index');
    }
}
