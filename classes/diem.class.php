<?php
require 'DB.class.php';
class diem extends DB
{
    function alldiem()
    {
        $con = $this->connect();
        $sql = "select * from diem,hocsinh,monhoc,hocky WHERE diem.MaHS=hocsinh.MaHS && diem.MaMonHoc=monhoc.MaMonHoc && diem.MaHocKy=hocky.MaHocKy";
        $query = mysqli_query($con, $sql);
        $result = array();
        if ($query) {
            while ($row = mysqli_fetch_assoc($query)) {
                $result[] = $row;
            }
        }
        return $result;
    }

    function alldiem_log()
    {
        $con = $this->connect();
        $sql = "SELECT l.*,  d.MaLopHoc, d.MaMonHoc, d.MaHS, d.MaHocKy, h.TenHS
                FROM diem_log AS l
                JOIN diem AS d ON l.MaDiem = d.MaDiem
                JOIN hocsinh AS h ON d.MaHS = h.MaHS
                ORDER BY l.ThoiGianThayDoi DESC";
        $query = mysqli_query($con, $sql);
        $result = array();
        if ($query) {
            while ($row = mysqli_fetch_assoc($query)) {
                $result[] = $row;
            }
        }
        return $result;
    }

    function selectdiem($id)
    {
        $con = $this->connect();
        $sql = "select * from diem where MaDiem={$id}";
        $query = mysqli_query($con, $sql);
        $result = array();
        if (mysqli_num_rows($query) > 0) {
            $row = mysqli_fetch_assoc($query);
            $result[] = $row;
        }
        return $result;
    }
    function dong()
    {
        $dis = $this->close();
        return $dis;
    }
}
