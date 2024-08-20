import axios from 'axios';
import { getRecoil, setRecoil } from 'recoil-nexus';
import environment from '@/React/environment';
import { tokenSelectorState, userState } from '@/React/state';
import { IUser } from '../interfaces/user.interface';

export const logout = () => {
  localStorage.clear();
  setRecoil(userState, undefined);
  window.location.href = '/login';
};

export const RefreshTokenAction = () => {
  const token = getRecoil(tokenSelectorState);
  const dataRequest = {
    refreshToken: token?.RefreshToken
  };
  return axios.post<{ JwtToken: string }>(`${environment.baseUrl}/refreshToken`, dataRequest);
};

export const login = (data: { email: string; password: string }) => {
  return axios.post<IUser>(`${environment.baseUrl}/login`, data);
};

export const registerAction = (data: { name: string; phone: string; email: string; password: string }) => {
  return axios.post(`${environment.baseUrl}/register`, data);
};
