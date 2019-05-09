import java.util.*;
class problem2
{
    public static void main(String[] args)
    {
        Scanner sc=new Scanner(System.in);
        int m=sc.nextInt();
        int d=sc.nextInt();
        int y=sc.nextInt(),s=0;
        if(y%4==0)
        {
            if(m==2)
            s=31;
            else if(m==3)
            s=31+29;
            else if(m==4)
            s=31+29+31;
            else if(m==5)
            s=31+29+31+30;
            else if(m==6)
            s=31+29+31+30+31;
            else if(m==7)
            s=31+29+31+30+31+30;
            else if(m==8)
            s=31+29+31+30+31+30+31;
            else if(m==9)
            s=31+29+31+30+31+30+31+31;
            else if(m==10)
            s=31+29+31+30+31+30+31+31+30;
            else if(m==11)
            s=31+29+31+30+31+30+31+31+30+31;
            else if(m==12)
            s=31+29+31+30+31+30+31+31+30+31+30;
            
        }
        else
        {
            if(m==2)
            s=31;
            else if(m==3)
            s=31+28;
            else if(m==4)
            s=31+28+31;
            else if(m==5)
            s=31+28+31+30;
            else if(m==6)
            s=31+28+31+30+31;
            else if(m==7)
            s=31+28+31+30+31+30;
            else if(m==8)
            s=31+28+31+30+31+30+31;
            else if(m==9)
            s=31+28+31+30+31+30+31+31;
            else if(m==10)
            s=31+28+31+30+31+30+31+31+30;
            else if(m==11)
            s=31+28+31+30+31+30+31+31+30+31;
            else if(m==12)
            s=31+28+31+30+31+30+31+31+30+31+30;
            
        }
        s+=d;
        System.out.println(s);
    }
}
            