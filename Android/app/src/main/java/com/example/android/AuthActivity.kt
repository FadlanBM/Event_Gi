package com.example.android

import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import com.example.android.databinding.ActivityAuthBinding
import com.example.android.databinding.ActivityMainBinding
import com.example.android.ui.auth.LoginActivity
import com.example.android.ui.auth.RegisterActivity
import com.example.android.util.Preft

class AuthActivity : AppCompatActivity() {
    override fun onBackPressed() {
        startActivity(Intent(this,MainActivity::class.java))
    }
    private var _binding: ActivityAuthBinding? = null

    // This property is only valid between onCreateView and
    // onDestroyView.
    private val binding get() = _binding!!
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_auth)
        _binding = ActivityAuthBinding.inflate(layoutInflater)
        setContentView(binding.root)

        binding.btnSignIn.setOnClickListener {
            startActivity(Intent(this,LoginActivity::class.java))
        }

        binding.btnSignUp.setOnClickListener {
            startActivity(Intent(this,RegisterActivity::class.java))
        }
        binding.btnBackAuth.setOnClickListener {
            onBackPressed()
        }
        if (Preft.isLogin){
            startActivity(Intent(this,DashboardActivity::class.java))
        }else{
        }
    }
}