#include <iostream>
#include <string>
#include <vector>
#include <algorithm>

using namespace std;

int main()
{
    int b_x;
    int b_y;
    cin >> b_x >> b_y; cin.ignore();
    int v_x;
    int v_y;
    cin >> v_x >> v_y; cin.ignore();
    int p_n;
    cin >> p_n; cin.ignore();
    int k_n;
    cin >> k_n; cin.ignore();
    for (int i = 0; i < p_n; i++) {
        int p_x;
        int p_y;
        cin >> p_x >> p_y; cin.ignore();
    }
    for (int i = 0; i < k_n; i++) {
        int k_x;
        int k_y;
        int k_strength;
        int k_points;
        cin >> k_x >> k_y >> k_strength >> k_points; cin.ignore();
    }

    // Write an answer using cout. DON'T FORGET THE "<< endl"
    // To debug: cerr << "Debug messages..." << endl;

    cout << "points" << endl;
}