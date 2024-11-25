import { apiBase } from "@/api/api-base";
import { BaseService } from "./base.service";
import { PAYMENT } from "@/define/payment.define";

export interface processDeposit {
  code: string,
  message: string,
  vnp_Url: string
}

class Payment extends BaseService {
  async processDeposit(data: {
    payment: typeof PAYMENT[keyof typeof PAYMENT]
    amount: number;
    booking_id: string;
  }): Promise<processDeposit> {
    const response = await apiBase.post<processDeposit>('/payments/processDeposit', data);
    return response.data;
  }
}

export const paymentService: Payment = Payment.getInstance();