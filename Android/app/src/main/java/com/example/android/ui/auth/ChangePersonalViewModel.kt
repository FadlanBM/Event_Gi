package com.example.android.ui.auth


import androidx.lifecycle.ViewModel
import androidx.lifecycle.asLiveData
import com.example.android.core.data.repository.AppRepository
import com.example.android.core.data.resourch.request.PersonalRequest
import com.example.android.core.data.resourch.request.UpdateProfileRequest
import com.example.android.core.data.resourch.request.getPassRequest
import okhttp3.MultipartBody

class ChangePersonalViewModel(private val repo:AppRepository):ViewModel() {
    fun postPersonal(data: PersonalRequest)=repo.postPersonal(data).asLiveData()
    fun getPersonal(id: Int?=null)=repo.getPersonal(id).asLiveData()
    fun delete_account(id: Int?=null)=repo.delete_account(id).asLiveData()
    fun getPass(id: Int?=null,data:getPassRequest)=repo.getPass(id,data).asLiveData()
}