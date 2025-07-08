#include <iostream>
#include <string>
#include <vector>
#include <algorithm>

using namespace std;

int main()
{
    int width;
    int height;
    cin >> width >> height; cin.ignore();
    int players;
    cin >> players; cin.ignore();
    int doors;
    cin >> doors; cin.ignore();
    int turns;
    cin >> turns; cin.ignore();
    for (int i = 0; i < players; i++) {
        int r_x;
        int r_y;
        cin >> r_x >> r_y; cin.ignore();
    }
    for (int i = 0; i < doors; i++) {
        int coord;
        string wall;
        cin >> coord >> wall; cin.ignore();
    }
    for (int i = 0; i < turns; i++) {
        int t_x;
        int t_y;
        string direction;
        cin >> t_x >> t_y >> direction; cin.ignore();
    }
    for (int i = 0; i < players; i++) {

        // Write an answer using cout. DON'T FORGET THE "<< endl"
        // To debug: cerr << "Debug messages..." << endl;

        cout << "answer" << endl;
    }
}