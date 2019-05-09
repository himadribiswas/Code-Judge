import java.util.*;
public class PalPrime
{
    public boolean prime(int n)
    {
        int c=0;
        for(int i=1;i<=n;i++)
        {
            if(n%i==0)
                c++;
        }
        if(c==2)
            return true;
        else
            return false;
    }

    public boolean palindrome(int n)
    {
        int rev=0,temp=n;
        while(temp!=0)
        {
            rev=rev*10+(temp%10);
            temp=temp/10;
        }
        if(rev==n)
            return true;
        else
            return false;
    }

    public static void main(String args[])
    {
        Scanner ob=new Scanner(System.in);
        System.out.println("Enter number to be checked");
        int num=ob.nextInt();
        PalPrime obj=new PalPrime();
        if(obj.prime(num)==true && obj.palindrome(num)==true)
            System.out.println("Palprime");
        else
            System.out.println(" Not Palprime");
    }
}